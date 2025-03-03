<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $products = DB::table('products')->where('user_id', Auth::user()->id)->get();
        $quantd_sales = DB::table('sales')->where('user_id', Auth::user()->id)->count();
        return view('dashboard', ['products' => $products], ['quantd_sales' => $quantd_sales]);
    }
}
