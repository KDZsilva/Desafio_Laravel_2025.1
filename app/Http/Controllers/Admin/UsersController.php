<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function index (){
        $users = DB::table('users')->get();

        return view('admin.users', ['users' => $users]);
    }
}
