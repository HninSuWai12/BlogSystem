<?php

namespace App\Http\Controllers;

use auth;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function show()
    {
        // $blogPost = // Retrieve the blog post from the database using the $id

        if (auth()->check()) {
            // User is logged in, show the blog post
            return view('page');
        } else {
            // User is not logged in, redirect to the registration page
            return redirect()->route('register.index');
        }
    }
}
