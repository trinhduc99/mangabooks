<?php

namespace App\Http\Controllers;

use App\User;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

}
