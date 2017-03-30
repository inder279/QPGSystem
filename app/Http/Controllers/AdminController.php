<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getUsers(){
    $users = User::paginate(10);
    return view('displayUsers', compact('users'));
   }
}
