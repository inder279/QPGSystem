<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:admin');
    }

    public function getUsers(){
	    $users = User::paginate(10);
	    return view('displayUsers', compact('users'));
   }

   public function getAdminView(){
   	return view('admin');
   }

   public function setCoordinator(Request $request){
      echo $request->first_name;
   }
}
