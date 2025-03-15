<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Hash;
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
        if(empty($request->file('foto'))){
            $data['foto'] = $user->foto;
        }
        else {
            $file_name = rand(0, 999999999) . '-'. $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/' . $file_name);
            $data['foto'] = $path;
        }



        $user->update($data);
        $user->save();
        return redirect()->route('admin.users')->with('status', 'profile-updated');
    }

    public function store (Request $request){
        $data = $request->all();
        if(empty($request->file('foto'))){
            $data['foto'] = "defaults/user_default.png";
        }
        else {
            $file_name = rand(0, 999999999) . '-'. $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/' . $file_name);
            $data['foto'] = $path;
        }

        
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'foto' => $data['foto'],
            'cpf' => $data['cpf'],
            'data_de_nascimento' => $data['data_de_nascimento'],
            'endereco' => $data['endereco'],
            'telefone' => $data['telefone'],
            'saldo' => 0
        ]);
        return redirect()->route('admin.users');
    }

    public function destroy (User $user) {
        $user->delete();
        return redirect()->route('admin.users');
    }
}
