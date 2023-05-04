<?php
namespace App\Http\Controllers;

require_once('../vendor/autoload.php');

use App\Models\User;
use App\Rules\matchpassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
   public function index() {
    return view ('admin.profile' , [
        'admin' => Auth::user() 
    ]) ; 
   }

   public function create(User $user){ 
    return view ('admin.edit' ,[
        'user'=> $user 
    ]);
   }

    public function store(User $user){
    
    request()->validate([
        'name' => ['required', 'string', 'max:255' , Rule::unique('users','name')->ignore($user)],
        'email' => ['required', 'string','email', 'max:255',Rule::unique('users','email')->ignore($user)],
        'image' => ['image']
    ]);
    
      if(request()->has('image')){
        $path = request()->file('image')->store('profile_images');
      }
      else{
        $path = $user->image;
      }
      
      User::where('id',$user->id)->update([
        'name'  => request('name'),
        'email' => request('email'),
        'image' => $path
    ]);

    toastr()->success('Data has been updated successfully!');

    return back();
    
}


public function update_password_create (){ 
  return view ('admin.password_update');
 }

public function update_password_store (){ 
  request()->validate([
    'old_password'=>['required' , 'current_password'] ,
    'new_password'=>['bail','required','confirmed',Rules\Password::defaults(),new matchpassword] 
  ] , ['confirmed'=>"password doesn't match"]);


Auth::user()->update([
'password'=>Hash::make(request('new_password'))
]);

Auth::logout();

toastr()->success('Password has been updated successfully!');
return view ('auth.login');
}




}


