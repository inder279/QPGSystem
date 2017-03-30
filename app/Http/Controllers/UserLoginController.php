<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    public function postSignUp(Request $request){

      //validation
      $this->validate($request,['email'=>'required|email|unique:users','first_name'=>'required|max:120','last_name'=>'required|max:120','password'=>'required|min:4']);

      //declaration
   	$email = $request['email'];
   	$first_name = $request['first_name'];
   	$last_name = $request['last_name'];
   	$password = bcrypt($request['password']);
    //initially created a user type user
    

   	$user = new User();

   	//initializing user object

   	$user->email = $email;
   	$user->first_name = $first_name;
   	$user->last_name = $last_name;
   	$user->password = $password;
    
      //saving user
   	$user->save();
    //initially login
    //Auth::login($user);
   	if(Auth::guard('user')->attempt(['email'=> $request['email'] , 'password'=> $request['password']])){
         //success login user
         return view('user');
      }
      //login failed
      return redirect()->back();
   }
   

   //user sign in
   public function postSignIn(Request $request){
      if(Auth::guard('user')->attempt(['email'=> $request['email'] , 'password'=> $request['password']])){
         //success login user
         return redirect()->route('user');
      }
      //login failed
      return redirect()->back();
   }
}
