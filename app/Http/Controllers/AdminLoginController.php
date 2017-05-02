<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

   //admin sign in
   public function postSignIn(Request $request){
      if(Auth::attempt(['email'=> $request['email'] , 'password'=> $request['password']])){
         //success login admin
         return redirect()->route('admin');
      }
      echo "failed";
      //login failed -> redirected to home
      return redirect()->route('home');
      
   }
}
