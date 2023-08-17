<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordController extends Controller
{
    //
    public function change(Request $request,$id){
        // $validator = Validator::make($request->all(), [
        //     'oldPassword' => 'required',
        //     'newPassword' => 'required',
        //     'confirmPassword'=>'required'
        // ], );

        //dd($validator);
        $check=$this->ValidationCheck($request);
          $user = User::where('id',$id)->first();
        
        

        if (Hash::check($request->oldPassword, $user->password)) {
            $user->update([
                'password' => Hash::make($request->newPassword)
            ]);

            return redirect()->back()->with('success', 'Password changed successfully!');
        } else {
            return redirect()->back()->with(['fail' => 'Incorrect old password']);
        }
     }

     private function ValidationCheck($request){


        $inputs = request()->validate([
           
            'oldPassword' => 'required',
            'newPassword'=>'required|min:8',
            'confirmPassword'=>'required|same:newPassword|min:8',
            
      ]);


    }
        
    
}
