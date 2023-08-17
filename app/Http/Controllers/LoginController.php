<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    //

    public function loginPage(){
        return view('login');
    }

    public function auth(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        if(Auth::user()->role == 'user'){
            return redirect()->route('user.home');
        }else{
            return redirect()->route('manage');
        }
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
        'password'=>'Password is Wrong.Please try again.'
    ]);
}
//redirectToGoogle
public function redirectToGoogle(){
    //return Socialite::driver('google')->redirect();
    return redirect()->away(Socialite::driver('google')->stateless()->redirect()->getTargetUrl());

}
public function handelCallback()
{
    $googleUser = Socialite::driver('google')->stateless()->user();;
    $existingUser = User::where('email', $googleUser->email)->first();

    if ($existingUser) {
        auth()->login($existingUser);
    } else {
        $newUser = new User();
        $newUser->name = $googleUser->name;
        $newUser->email = $googleUser->email;
        $newUser->password = Hash::make(Str::random(20)); // Temporary random password
        $newUser->gender = 'other'; // You can customize this based on the data you get from Google
        $newUser->bio = 'This is USer'; // You can customize this based on your form
        $newUser->role = 'user'; // Default role
        $newUser->save();

        auth()->login($newUser);
    }

    
    if(Auth::user()->role == 'user'){
        return redirect()->route('user.home');
    }else{
        return redirect()->route('manage');
    }
}
//Redirect To Facebook
public function redirectToFacebook()
{
    return Socialite::driver('facebook')->redirect();
}
public function facebookCallback(){
    try {
      
    $facebookUser = Socialite::driver('facebook')->user();
    $existingUser = User::where('email', $facebookUser->getEmail())->first();

    if ($existingUser) {
        auth()->login($existingUser);
    } else {
        $newUser = new User();
        $newUser->name = $facebookUser->getName();
        $newUser->email = $facebookUser->getEmail();
        $newUser->password = Hash::make(Str::random(20)); // Temporary random password
        $newUser->gender = 'other'; // You can customize this based on the data you get from Google
        $newUser->bio = 'This is USer'; // You can customize this based on your form
        $newUser->role = 'user'; // Default role
        $newUser->save();

        auth()->login($newUser);
    }

    
    if(Auth::user()->role == 'user'){
        return redirect()->route('user.home');
    }else{
        return redirect()->route('manage');
    }

}
       

    
    catch (\Exception $e) {
        // Handle the exception, maybe redirect back to the login page with an error message.
        return redirect('/login')->with('error', 'Login with Facebook failed');
    }
}
}


