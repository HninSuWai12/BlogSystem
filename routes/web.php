<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CSVController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\FavouriteController;
use App\Http\Controllers\Admin\adminController;
use PHPUnit\Framework\Attributes\PostCondition;

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
//Logout
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
//Middle Before Login
Route::get('post', [BlogController::class, 'show'])->name('blogPage');

Route::get('/', function () {
    $data = Post::select('posts.*', 'users.name as user_name','users.image as user_image')
        ->join('users', 'posts.user_id', '=', 'users.id')
        ->get();
    //dd($data->toArray());
    $user = Auth::user();
    return view('home')->with(['data' => $data, 'user' => $user]);
})->name('welcome');


    //Register
Route::get('register', [RegisterController::class, 'index'])->name('register.index');
Route::post('register', [RegisterController::class, 'registerUser'])->name('register.registerUser');
//Route::get('/auth/google',[RegisterController::class,'redirectToGoogle'])->name('register.redirectToGoogle');
//Route::get('/auth/google/callback',[RegisterController::class,'handelGoogleCallback'])->name('register.handelGoogleCallback');


//Login
Route::get('login', [LoginController::class, 'loginPage'])->name('loginPage');
Route::post('login', [LoginController::class, 'auth'])->name('auth.Login');
Route::get('/auth/google',[LoginController::class,'redirectToGoogle'])->name('login.redirectToGoogle');
Route::get('/auth/google/callback',[LoginController::class,'handelCallback'])->name('login.handelCallback');
Route::get('/auth/facebook',[LoginController::class,'redirectToFacebook'])->name('redirectToFacebook');
Route::get('/auth/facebook/callback',[LoginController::class,'facebookCallback'])->name('facebookCallback');


Route::get('waiting',[dashboardController::class,'waiting'])->name('waiting');
Route::post('waiting',[dashboardController::class,'goDashboard'])->name('goDashboard');





Route::group(['prefix'=>'dashboard', 'middleware'=>'auth'],function(){
Route::get('dashboard',[dashboardController::class,'dashboard'])->name('auth.dashboard');
})->name('dashboard');

//Admin
Route::middleware(['auth'])->group(function(){

    Route::group(['prefix'=>'manage' , 'middleware'=>'admin_auth'],function(){
        Route::get('approve/{id}',[adminController::class,'approve'])->name('admin.approve');
        
        Route::get('/manage',[adminController::class,'index'])->name('manage');
        Route::get('add',[adminController::class,'add'])->name('manage.add');
        Route::post('add',[adminController::class,'upload'])->name('manage.upload');
        Route::get('manage/edit/{id}',[adminController::class,'edit'])->name('manage.edit');
        Route::post('manage/update/{id}',[adminController::class,'update'])->name('manage.edit');
        Route::get('delete/{id}',[adminController::class,'delete'])->name('admin.delete');

        //download CSV
        Route::get('/generate-csv', [CSVController::class,'generateCSV'])->name('generate.csv');

    });
    
    
    //User
   Route::middleware(['user_approve'])->group(function(){
    Route::group(['prefix' => 'user','middleware'=>'user_auth'], function () {
       
        //CreatePost
        Route::get('post', [PostController::class, 'post'])->name('page.admin');
        Route::post('post', [PostController::class, 'upload'])->name('admin.post');
        Route::get('editPost/{id}', [PostController::class, 'editPost'])->name('admin.edit');
        Route::post('editPost/{id}', [PostController::class, 'update'])->name('admin.update');
        Route::get('postDelete/{id}', [PostController::class, 'delete'])->name('admin.delete');
        Route::get('detail/{id}',[PostController::class,'detail'])->name('post.detail');
        Route::post('comments',[PostController::class,'store'])->name('post.comment');
        Route::get('show/{id}',[PostController::class,'show'])->name('post.show');
        Route::delete('/comments/{id}', [PostController::class, 'destroy'])->name('comment.destroy');
        Route::post('comments/{comment}/new-reply',[PostController::class,'replyStore'])->name('reply.store');
        Route::get('showdata',[PostController::class,'index'])->name('reply.show');
    
    
        //Profile
     Route::get('profile', [ProfileController::class, 'profile'])->name('profile.page');
     // Route::post('profile/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::put('profile/{id}', [ProfileController::class,'update'])->name('items.update');
     
     Route::post('/upload-image/{id}', [ProfileController::class,'uploadImage'])->name('uploadImage');
     
     //Password
     Route::post('cahngePassword/{id}',[PasswordController::class,'change'])->name('password.change');
     
     //Like
     //Like
    Route::post('home/{postID}/favourite',[FavouriteController::class,'like'])->name('post.favourite');
    Route::delete('home/{postId}/favorite', [FavouriteController::class,'destroy'])->name('post.unfavourite');
       
    Route::get('home', [FavouriteController::class, 'home'])->name('user.home');
    // routes/web.php
    Route::get('/search', [FavouriteController::class,'search'])->name('search');
    
    });
   });
});









 
