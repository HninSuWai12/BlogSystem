<?php

namespace App\Http\Controllers;

//use auth;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    //register page
    public function index(){
        $gender=User::getGender();
        return view('register',compact('gender'));
    }

    //register user
    public function registerUser(Request $request){
        $this->ValidationCheck($request);
        $data=$this->requestData($request);
        User::create($data);
        return redirect()->route('loginPage');

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
            'gender'=>$request->gender,
            'password'=>Hash::make($request->password),
            'bio'=>$request->bio

        ];
    }




}
