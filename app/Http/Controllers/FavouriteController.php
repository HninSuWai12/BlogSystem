<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller

{

    //  app/Http/Controllers/FavoriteController.php

    public function home(){
        $user = Auth::user();
        //dd($user->toArray());
       // $user=User::get();
       $post=Post::with('favorites')->get();

       
       return view('page',)->with(['data'=>$post,'user'=>$user]);
   }

   
    //Search
    public function search(Request $request)
    {   $user = Auth::user();
        
        $query = $request->input('query');
       // dd($query);
       //dd($userData->toArray());

       $data = Post::select('posts.*', 'users.*')
       ->join('users', 'posts.user_id', '=', 'users.id')
       ->where('title','like','%'.$query.'%')
       ->orwhere('content','like'.'%'.$query.'%')
       ->orwhere('name', 'LIKE', "%$query%")
       ->orWhere('email', 'LIKE', "%$query%")
       ->get();
        
    //    //dd($data->toArray());

    //     return view('page', compact('data','user'));
    $userData = User::where('name', 'LIKE', "%$query%")
    ->orWhere('email', 'LIKE', "%$query%")
    ->get();
   // dd($userData->toArray());
        
    // Search for posts and users based on the query
   

   

    return view('search', compact('data',  'user' ,'userData'));
    }


//Like
    public function like(Request $request, $postId)
    {
        $userId = auth()->id();
        //dd($userId);
        $existingFavourite = Favourite::where('user_id', $userId)
            ->where('post_id', $postId)
            ->first();
        if ($existingFavourite) {
            return back()->with('error', 'You already favourite this blog');
        }
        Favourite::create(['user_id' => $userId, 'post_id' => $postId]);
        return back()->with('success', 'Blog favourites successfully');
    }


    public function destroy(Request $request, $postId)
    {
        // Assuming you have authentication set up to identify the logged-in user.
        $userId = auth()->id();

        // Find the favorite record
        $favorite = Favourite::where('user_id', $userId)->where('post_id', $postId)->first();

        if ($favorite) {
            // Delete the favorite record
            $favorite->delete();

            // Redirect back with a success message or any other response you prefer
            return back()->with('success', 'Blog removed from favorites.');
        }

        // Redirect back with an error message or any other response you prefer
        return back()->with('error', 'Blog was not in your favorites.');
    }

   
  
    


}
