<?php

namespace App\Http\Controllers;
use App\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Auth;

class CoordinatorLoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('guest:coordinator');
    }


	//Coordinator sign in
   public function postSignIn(Request $request){
      if(Auth::guard('coordinator')->attempt(['email'=> $request['email'] , 'password'=> $request['password']])){
         //success login coordinator
         return redirect()->route('coordinator');
      }
      //login failed
      //return redirect()->back();
      return redirect()->route('home');
   }
}
