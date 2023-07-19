<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('welcome');
//Register
Route::get('register',[RegisterController::class,'index'])->name('register.index');
Route::post('register',[RegisterController::class,'registerUser'])->name('register.registerUser');
Route::get('home',[RegisterController::class,'home'])->name('user.home');

//Logout
Route::post('logout',[RegisterController::class,'logout'])->name('logout');

//Login
Route::get('login',[LoginController::class,'loginPage'])->name('loginPage');
Route::post('login',[LoginController::class,'auth'])->name('auth.Login');


//Blog

// Route::get('blog',[BlogController::class,'blog'])->route('blogPage');
Route::get('post',[BlogController::class,'show'])->name('blogPage');
