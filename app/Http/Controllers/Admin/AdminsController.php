<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index (){
        $users = Admin::orderBy('id', 'desc')->paginate(5);

        return view('admin.admins', ['users' => $users]);
    }

    public function editPage ($user_id){
        $user = Admin::find($user_id);
        if($user->creator_id != auth()->user()->id){
            return redirect()->route('admin.users');
        }

        return view ('admin.admin-update', ['user' => $user]);
    }

    public function createPage (){
        return view ('admin.admins-create');
    }

    public function view ($user_id){
        $user = Admin::find($user_id);

        return view ('admin.admins-view', ['user' => $user]);
    }

    public function update (Admin $user, Request $request){
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
        return redirect()->route('admin.admins')->with('status', 'profile-updated');
    }

    public function store (Request $request){
        $data = $request->all();
        if(empty($request->file('foto'))){
            $data['foto'] = "uploads/avatar_default.jpg";
        }
        else {
            $file_name = rand(0, 999999999) . '-'. $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/' . $file_name);
            $data['foto'] = $path;
        }

        
        Admin::create([
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
        return redirect()->route('admin.admins');
    }

    public function destroy (Admin $user) {
        $user->delete();
        return redirect()->route('admin.admins');
    }
}
