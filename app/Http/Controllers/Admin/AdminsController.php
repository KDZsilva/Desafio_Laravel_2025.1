<?php

namespace App\Http\Controllers\Admin;

use Hash;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function index (){
        $admin = Admin::orderBy('id', 'desc')->paginate(5);

        return view('admin.admins', ['admins' => $admin]);
    }

    public function editPage ($admin_id){
        $admin = Admin::find($admin_id);

        return view ('admin.admin-update', ['admin' => $admin]);
    }

    public function createPage (){
        return view ('admin.admins-create');
    }

    public function view ($admin_id){
        $admin = Admin::find($admin_id);

        return view ('admin.admins-view', ['admin' => $admin]);
    }

    public function update (Admin $admin, Request $request){
        $data = $request->all();
        $data['creator_id'] = $admin->creator_id;

        if(empty($request->file('foto'))){
            $data['foto'] = $admin->foto;
        }
        else {
            $file_name = rand(0, 999999999) . '-'. $request->file('foto')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/' . $file_name);
            $data['foto'] = $path;
        }

        $admin->update($data);
        $admin->save();
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
            'creator_id' => Auth::guard('admin')->user()->id,
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'foto' => $data['foto'],
            'cpf' => $data['cpf'],
            'data_de_nascimento' => $data['data_de_nascimento'],
            'endereco' => $data['endereco'],
            'telefone' => $data['telefone'],
        ]);
        return redirect()->route('admin.admins');
    }

    public function destroy (Admin $admin) {
        $admin->delete();
        return redirect()->route('admin.admins');
    }
}
