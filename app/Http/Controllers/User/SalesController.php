<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index() {
        return view('user.sales');
    }

    public function view() {
        //gerar pdf
    }

    public function gerarHistorico() {
        //gerar pdf com todas as compras
    }
}
