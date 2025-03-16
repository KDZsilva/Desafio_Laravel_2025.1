<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function index() {
        $compras = Sale::orderByDesc('id')->where('user_id', '=', Auth::guard('web')->user()->id)->paginate(5);
        return view('user.compras', ['sales' => $compras]);
    }

    public function pdf(Request $request) {
        $request->validate([
            'inicio' => 'required|date',
            'final' => 'required|date|after_or_equal:inicio',
        ]);
        $compras = Sale::orderByDesc('id')
            ->where('user_id', '=', Auth::guard('web')->user()->id)
            ->where('created_at', '>=', $request->inicio)
            ->where('created_at', '<=', $request->final)
            ->get();

        $data = [
            'sales' => $compras,
            'tipoRelatorio' => 'compras'

        ];
        

        $pdf = Pdf::loadView('pdf', compact('data'));
        return $pdf->stream('compras.pdf');
    }

    public function gerarHistorico() {
        //gerar pdf com todas as compras
    }
}
