<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index (){
        $users = User::orderBy('id', 'desc')->paginate(5);

        return view('admin.users', ['users' => $users]);
    }

    public function view ($user_id){
        $user = User::find($user_id);
        $user = User::with('addresses')->findOrFail($user_id);

        return view ('admin.users-view', ['user' => $user]);
    }
}
