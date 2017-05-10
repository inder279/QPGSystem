<?php

namespace App\Http\Controllers;
use App\User;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getUsers(){
	    $users = User::paginate(10);
	    return view('displayUsers', compact('users'));
   }

   public function getAdminView(){
   	return view('admin');
   }


   public function promoteUser(){
      $user_id = $_GET['user_id'];
      $user = DB::select('select * from users where id = :id', ['id' => $user_id]);
      $created = $user[0]->created_at;
      $first_name = $user[0]->first_name;
      $last_name = $user[0]->last_name;
      $email = $user[0]->email;
      $password = $user[0]->password;
      DB::insert('insert into admins (first_name, last_name, email, password, created_at) values (?, ?, ?, ?, ?)', [$first_name, $last_name, $email, $password, $created]);
      $deleted = DB::delete('delete from users where id = :id', ['id' => $user_id]);
      echo $user[0]->first_name;
   }


   public function logOut(){
      Auth::guard('admin')->logout();
      return view('welcome');
   }
}
