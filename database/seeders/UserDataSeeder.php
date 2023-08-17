<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // for ($i = 1; $i <= 100; $i++) {
        //     $gender = ($i % 3 === 0) ? 'other' : (($i % 2 === 0) ? 'male' : 'female'); // Set gender based on user number
        //     User::create([
        //         'name' => 'User ' . $i,
        //         'email' => 'user' . $i . '@example.com',

        //         'password' => Hash::make('password'), // Use Hash::make() to securely hash the password
        //         'gender'=>$gender,
        //         'bio'=>'This is the bio for User'.$i
        //     ]);
        // }
    }
}
