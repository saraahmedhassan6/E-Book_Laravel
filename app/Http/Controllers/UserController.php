<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users=User::paginate(8);
        return view('Dashboard.Users.user',compact('users'));
    }
}
