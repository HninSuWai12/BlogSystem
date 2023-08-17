<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //
    public function dashboard(){
        if(Auth::user()->role=='admin'){
            return redirect()->route('manage');
        }
        elseif(Auth::user()->role == 'user'){
            return redirect()->route('page.admin');
        }
    }
    //waiting until approved
    public function waiting(){
        //dd($id);
        $data=Auth::user();
       // dd($data->toArray());
        return view('waiting',compact('data'));
    }
    //if approved
    public function goDashboard(){

        $data=Auth::user();
        //dd($data);
        if($data->status =='approved'){
            return redirect()->route('user.home');
        }else{
            return back()->with(['info'=>'Please wait Admin Approve']);
        }
        
    }
}
