<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index (){
        $users = User::orderBy('id', 'desc')->paginate(5);

        return view('admin.users', ['users' => $users]);
    }

    public function editPage ($user_id){
        $user = User::find($user_id);

        return view ('admin.users-update', ['user' => $user]);
    }

    public function createPage (){
        return view ('admin.users-create');
    }

    public function view ($user_id){
        $user = User::find($user_id);

        return view ('admin.users-view', ['user' => $user]);
    }

    public function update (User $user, Request $request){
        $data = $request->all();
        $user->update($data);
        $user->save();
        return redirect()->route('admin.users')->with('status', 'profile-updated');
    }

    public function store (Request $request){
        $file_name = rand(0, 999999999) . '-'. $request->file('foto')->getClientOriginalName();
        $path = $request->file('foto')->storeAs('uploads/' . $file_name);

        $data = $request->all();
        $data['foto'] = $path;
        User::create($data);
        return redirect()->route('admin.users');
    }
}
