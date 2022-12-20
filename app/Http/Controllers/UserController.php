<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id','DESC')->paginate(10);

        return view('admin.users.index',compact('users'));
    }
}
