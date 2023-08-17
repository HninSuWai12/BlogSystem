<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function show()
    {
        // $blogPost = // Retrieve the blog post from the database using the $id

        if (auth()->check()) {
            $user = auth()->user();
            $data=Post::get();
            // User is logged in, show the blog post
            return view('page',compact('data','user'));
        } else {
            // User is not logged in, redirect to the registration page
            return redirect()->route('register.index');
        }
    }
}
