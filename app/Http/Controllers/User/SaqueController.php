<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class SaqueController extends Controller
{
    public function index () {
        $user = User::find(Auth::guard('web')->user()->id);
        return view('public.saque', ['user' => $user]);
    }

    public function saque (Request $request) {
        $request->validate([
            'saldo' => 'required',
            'saque' => 'required|integer|lte:saldo'
        ]);

        $userId = Auth::guard('web')->user()->id;
        $user = User::find($userId);

        $saque = $request['saque'];
        $novoSaldo = $user->saldo - ($saque * 100);

        $data = [
            'saldo' => $novoSaldo
        ];

        $user->update($data);
        $user->save();
        return redirect()->route('user.saques');
    }
}
