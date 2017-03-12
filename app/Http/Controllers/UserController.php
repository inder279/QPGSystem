<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
   public function postSignUp(Request $request){

   	$email = $request['email'];
   	$first_name = $request['first_name'];
   	$last_name = $request['last_name'];
   	$password = bcrypt($request['password']);

   	$user = new User();

   	//initializing user object

   	$user->email = $email;
   	$user->first_name = $first_name;
   	$user->last_name = $last_name;
   	$user->password = $password;
   	$user->save();
   	return redirect()->back();
   }

   public function postSignIn(Request $request){
      if(Auth::attempt(['email'=> $request['email'] , 'password'=> $request['password']])){
         //success do something
      }else{
         //wrong do something
      }
   }

}
