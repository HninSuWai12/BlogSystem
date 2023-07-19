<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //register page
    public function index(){
        return view('register');
    }

    //register user
    public function registerUser(Request $request){
        $this->ValidationCheck($request);
        $data=$this->requestData($request);
        User::create($data);
        return redirect()->route('user.home');

    }

    //user home
    public function home(){
        return view('page');
    }

    //Logout
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect()->route('welcome');
}



    //Request Check Validator
    private function ValidationCheck($request){


        $inputs = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'password'=>'required|min:8',
            'confirmPassword'=>'required|same:password|min:8',
            'bio'=>'required'
      ]);


    }

    //Request Require Data
    private function requestData($request){
        return[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'bio'=>$request->bio

        ];
    }




}
