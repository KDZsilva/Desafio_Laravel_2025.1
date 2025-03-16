<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {
        $sales = Sale::orderByDesc('id')->where('user_id', '=', Auth::guard('web')->user()->id)->paginate(5);
        return view('user.sales', ['sales' => $sales]);
    }

    public function pdf(Request $request) {
        $sales = Sale::orderByDesc('id')
            ->where('user_id', '=', Auth::guard('web')->user()->id)
            ->where('created_at', '>=', $request->inicio)
            ->where('created_at', '<=', $request->final)
            ->get();

        $data = [
            'sales' => $sales,
            'tipoRelatorio' => 'vendas'

        ];
        

        $pdf = Pdf::loadView('pdf', compact('data'));
        return $pdf->stream('sales.pdf');
    }

    public function gerarHistorico() {
        //gerar pdf com todas as compras
    }
}
