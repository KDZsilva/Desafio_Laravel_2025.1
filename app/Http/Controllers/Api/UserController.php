<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const ITEMS_PER_PAGE = 6;
    public function index () {
        $totalPages = ceil(User::count() / UserController::ITEMS_PER_PAGE);
        $users = User::get();
        $userData = $users ->map(function ($user) {
            return [
                'name' => $user->name,
                'photo' => 'storage/' . $user->foto,
            ];
        });

        return response()->json([
            'users' => $userData,
            'totalPages' => $totalPages,
            'status' => 200
        ]);
    }
}
