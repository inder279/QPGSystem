<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

   public function __construct()
    {
        $this->middleware('auth:user');
    }

   public function getUserView(){
      //returning the user view
      return view('user');
   }

   public function logOut(){
      Auth::guard('user')->logout();
      return view('welcome');
   }

   

}
