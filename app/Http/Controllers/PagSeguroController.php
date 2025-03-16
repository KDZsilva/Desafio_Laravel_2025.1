<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Http;
use Illuminate\Http\Request;

class PagSeguroController extends Controller
{
    public function createCheckout (Request $request){

        $url = config('services.pagseguro.checkout_url');
        $token = config('services.pagseguro.token');

        $chartProducts = json_decode($request->products, true);

        $items = array_map(fn($product) => [
            'name' => $product['name'],
            'quantity' => $product['quantidade'],
            'unit_amount' => $product['preco']
        ], $chartProducts);

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
            'Content-type' => 'application/json'
        ])->withoutVerifying()->post($url, [
            'reference_id' => uniqid(),
            'items' => $items
        ]);

        dd($response);

        if($response->successful()){
            Order::create([
                'reference_id' => $response['reference_id'],
                'status' => 1
            ]);
            $pay_link = data_get($response->json(), 'links.1.href');
            return redirect()->away($pay_link);

        };
    }
}
