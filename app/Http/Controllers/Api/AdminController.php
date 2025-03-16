<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    const ITEMS_PER_PAGE = 6;
    public function index () {
        $totalPages = ceil(Admin::count() / AdminController::ITEMS_PER_PAGE);
        $admin = Admin::get();
        $adminData = $admin ->map(function ($admin) {
            return [
                'name' => $admin->name,
                'photo' => 'storage/' . $admin->foto,
            ];
        });

        return response()->json([
            'admins' => $adminData,
            'totalPages' => $totalPages,
            'status' => 200
        ]);
    }
}
