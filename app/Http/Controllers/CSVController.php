<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CSVController extends Controller
{
    //
    public function generateCSV()
{
    $users = User::all(); // Replace 'User' with your actual user model if needed.

    $filename = Auth::user()->name.  '_report.csv';
    $headers = array(
        'Content-Type' => 'text/csv',
        'Content-Disposition' => 'attachment; filename="' . $filename . '"',
    );

    $callback = function () use ($users) {
        $file = fopen('php://output', 'w');

        // Write the CSV header
        fputcsv($file, ['id', 'Name', 'Email', 'Gender', 'Role', 'Status']);

        // Write the CSV data
        foreach ($users as $user) {
            fputcsv($file, [
                $user->id,
                $user->name,
                $user->email,
                $user->gender,
                $user->role,
                $user->status,
            ]);
        }

        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}
}
