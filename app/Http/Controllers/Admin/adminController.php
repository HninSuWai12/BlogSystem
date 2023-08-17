<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{
    //approve
    public function approve($id){
        $user = User::findOrFail($id);
        //$user->status = 'approved';
        $user->status = $user->status === 'approved' ? 'pending' : 'approved';

        $user->save();
       
    return redirect()->back()->with(['success'=>'Pending Status is Success']);

    }
    //
    public function index(){
       $user=User::orderBy('name', 'desc')->paginate(20);
       // dd($gender);
       //dd($user->toArray());
        return view('Manage.Layout.index',compact('user'));
    }
    public function add(){
        $role=User::getRole();
        $gender=User::getGender();
        return view('Manage.add',compact('gender','role'));
    }
    //add User
   public function upload(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'gender' => 'required',
        'password' => 'required|min:8'
    ]);

    $user = new User(); // Create a new instance of the User model
    $user->name = $data['name'];
    $user->email = $data['email'];
    $user->gender = $data['gender'];
    
    $user->password = bcrypt($data['password']); // Assuming you are using bcrypt for password hashing

     $user->save(); // Ca
    
    return redirect()->route('manage');
}

//edit
public function edit($id){
    $role=User::getRole();
    $gender=User::getGender();
    $user=User::where('id',$id)->first();
    return view('Manage.edit',compact('user','role','gender'));
}
//update
public function update($id,Request $request){
    //dd($request->all());
   
    $data =[
        'name' => $request->name,
        'email' => $request->email,
        'gender' => $request->gender,
        'role'=>$request->role,
        'password' => bcrypt($request->password)
    ];

   User::where('id',$id)->update($data);
// 
    return redirect()->route('manage');
}
//delete
public function delete($id){
    User::where('id',$id)->delete();
    return redirect()->back();
}




}
