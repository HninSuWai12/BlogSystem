<?php

namespace App\Http\Controllers;

use App\Models\Post;

use App\Models\Comment;
use App\Models\newReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //
    public function post()
    {  
         $categoryItem = Post::getCategoryItem();
        //dd($productStatusEnum);
        return view('Admin.post',compact('categoryItem'));
    }
    
    public function upload(Request $request)
    {
       

        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,jfif|max:2048',
            'category'=>'required',
            'content' => 'required',
        ]);
        $newData=$this->requestData($request);
        $file=$request->file('image');
           //dd($file);
           $fileName =uniqid().'_'. $file->getClientOriginalName();
           //dd($fileName);
           $file->storeAs('public',$fileName);
       
        
        $newData['image']=$fileName;
       //dd($newData);
        $post = Post::create($newData);
        // dd($post);
        return redirect()->route('user.home');
    }

    ///EditPost
    public function editPost($id){
        
        $post=Post::where('id',$id)->first();
        //dd($post->toArray());
        //$data=Post::where('user_id',Auth::user()->id)->first();
        //dd($data->toArray());
        return view('Admin.postEdit')->with(['post'=>$post]);
    }
    
    ///Update Data
    public function update(Request $request ,$id){
        
        //dd($request->all());
        $updateData=$this->requestData($request);
        
       
        if ($request->hasFile('image')) {
            $dbImage=Post::where('id' ,$id)->first();
            $dbImage=$dbImage->image;
            //dd($dbImage);
            if($dbImage!=null){
                storage::delete('public/'.$dbImage);
            }

            $fileName=uniqid().$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$fileName);
        $updateData['image']=$fileName;

        }
    $data1= Post::where('id',$id)->update($updateData);
//dd($request->post_id);
     return redirect()->route('user.home');
    }


    //delete Post
    public function delete($id){
        //dd($id);

        $data=Post::select('image')->where('id',$id)->first();
    //dd($data->toArray());
    $fileName=$data['image'];
    //dd($fileName);

    Post::where('id',$id)->delete();
    if(File::exists(public_path().'/uploads/'.$fileName));
    File::delete(public_path().'/uploads/'.$fileName);

    return redirect()->back();
    }


    //Post Detail
    public function detail($id){
        

$post=Post::where('id',$id)->first();

//dd($post->user->name);
        return view('detail',compact('post'));
    }

    //Comment
    public function store(Request $request)
    
    {
        
        $validatedData = $request->validate([
            'content' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',
            'post_id' => 'required|exists:posts,id',
        ]);
//dd($request->user_id);
        $comment = Comment::create($validatedData);
    


        // You can redirect to the post page or return a JSON response, depending on your use case.
        return redirect()->back();
    }
//Show
// public function show($id)
// {
//     // Use a left join to include user's name if the comment is associated with an authenticated user.
//     // $post = Post::select('posts.*', 'comments.content')
//     //     ->join('comments', 'posts.id', '=', 'comments.post_id')
//     //     ->get();
//     $post = Post::leftJoin('comments', 'posts.id', '=', 'comments.post_id')
//             ->leftJoin('users', 'comments.user_id', '=', 'users.id')
//             ->select('posts.*', 'comments.name as comment_user_name', 'users.name as auth_user_name')
//             ->findOrFail($id);
//         //dd($post);
        

//     return view('detail', compact('post'));
// }
public function show($id)
{
    $post = Post::findOrFail($id);
    $comments = Comment::with('user')->where('post_id', $id)->get();

    return view('detail', compact('post', 'comments'));
}

//Delete
public function destroy($id)
{
    $comment = Comment::findOrFail($id);
    $comment->delete();
return redirect()->back();
    // Return a response indicating the deletion was successful.
}


//replyStore
public function replyStore(Request $request, Comment $comment)
{
    $request->validate([
        'reply' => 'required|string',
    ]);

    $newReply = new NewReply([
        'user_id' => Auth::id(),
        'reply' => $request->input('reply'),
    ]);

    $comment->newReplies()->save($newReply);

    return redirect()->back()->with('success', 'New Reply added successfully.');
}

public function index($id)
    {
        $comment = Comment::findOrFail($id);

        // Eager load the user information for each reply
        $comment->load('newReplies.user');

        return view('detail', compact('comment'));
    }

    private function requestData($request){
        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'category'=>$request->category,
            
            'user_id'=>Auth::user()->id,
        ];
        return $data;
    }
   
}
