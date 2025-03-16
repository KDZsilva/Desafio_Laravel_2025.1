<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdminResource;
use App\Http\Resources\UserResource;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        // if(Auth::guard('web')->attempt($credentials)){
        //     $token = Auth::guard('web')->user()->createToken('token-name')->plainTextToken;
        //     return response()->json([
        //         'user' => new UserResource(Auth::user()),
        //         'token' => $token,
        //         'status' => 200
        //     ]);
        // }

        if(Auth::guard('admin')->attempt($credentials)){
            $admin = Auth::guard('admin')->user();
            $token = $admin->createToken('token-name')->plainTextToken;
            return response()->json([
                'user' => new AdminResource($admin),
                'token' => $token,
                'status' => 200
            ]);
        }

        return response()->json([
            'message' => 'Email ou senha inválidos',
            'status' => 205
        ]);
    }
}
