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
        $sales = Sale::orderByDesc('id')
            ->join('products', 'sales.product_id', '=', 'products.id')
            ->where('products.user_id', '=', Auth::guard('web')->user()->id)->with('product');

        return view('user.sales', ['sales' => $sales]);
    }

    public function pdf(Request $request) {
        $request->validate([
            'inicio' => 'required|date',
            'final' => 'required|date|after_or_equal:inicio',
        ]);
        $sales = Sale::orderByDesc('id')
            ->join('products', 'sales.product_id', '=', 'products.id')
            ->where('products.user_id', '=', Auth::guard('web')->user()->id)
            ->whereDate('sales.created_at', '>=', $request->inicio)
            ->whereDate('sales.created_at', '<=', $request->final)
            ->select('sales.*')
            ->get();

        $data = [
            'sales' => $sales,
            'tipoRelatorio' => 'vendas'

        ];
        

        $pdf = Pdf::loadView('pdf', compact('data'));
        return $pdf->stream('sales.pdf');
    }
}
