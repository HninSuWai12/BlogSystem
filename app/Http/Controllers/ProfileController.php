<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $post=Post::where('id',Auth::user()->id)->get();
        //dd($post->toArray());
        return view('Profile.profileInfo', compact('user','post'));
    }

    public function update(Request $request, $id)
{
    
//dd($request->all());

    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'bio'=>'required',
         
       
    ]);
    $dbImage=User::where('id',$id)->first();
    $dbImage=$dbImage->image;
    //dd($dbImage);
    if($dbImage!=null){
        Storage::delete('public/'.$dbImage);
    }
    $fileName=uniqid().'_'.$request->file('image')->getClientOriginalName();
    $file=$request->file('image');
   // dd($file);
   
    $file->storeAs('public',$fileName);


    

   $user = User::findOrFail($id);
    $user->name=$request->input('name');
    $user->bio=$request->input('bio');
    $user->image=$fileName;
    

    $user->update();
   
    return redirect()->back();
}

public function uploadImage(Request $request,$id){
    //dd($request->all());
    

    $file=$request->file('image');
           //dd($file);
           $fileName =uniqid().'_'. $file->getClientOriginalName();
           //dd($fileName);
           $file->storeAs('public',$fileName);
           $user = User::findOrFail($id);
           $user->image=$fileName;
           $user->update();
           return response()->json(['message' => 'Item updated successfully']);
        
          
}



}
