<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index (Request $request) {
        $categories = Category::all();
        $products = Product::query();

        if(Auth::guard('web')->check()){
            $user_id = Auth::guard('web')->user()->id;
            $products->where('user_id', '!=', $user_id);
        }
        if($request->has('category_id') && $request->category_id != ''){
            $products->where('category_id', $request->category_id);
        }
        if($request->has('search') && $request->search != ''){
            $products->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $products->orderBy('id', 'desc')->paginate(20);

        return view('public.home', ['categories' => $categories], ['products' => $products]);
    }

    public function View ($product_id){
        $product = Product::find($product_id);

        return view('public.products-view', ['product' => $product]);
    }

    public function chartproduct(Product $product, Request $request){
        $preco = ($product->preco - $product->desconto);
        $product = $product->toArray();
        $product['preco'] = $preco;
        $product['quantidade'] = $request->quantity;
        return view('public.chart', ['product' => $product]);
    }
}
