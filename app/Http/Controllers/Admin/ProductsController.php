<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index (){
        $products = Product::orderBy('id', 'desc')->with('category', 'photos')->paginate(5);

        return view('admin.products', ['products' => $products]);
    }

    public function editPage ($product_id){
        $product = Product::find($product_id)->with('category', 'photos');

        return view ('admin.product-update', ['product' => $product]);
    }

    public function view ($product_id){
        $product = Product::find($product_id);
        $product->load( 'photos');

        return view ('admin.products-view', ['product' => $product]);
    }

    public function update (Product $product, Request $request){
        $data = $request->all();

        if(empty($request->file('photos'))){
            $data['photos'] = $product->photos()->url;
        }
        else {
            $file_name = rand(0, 999999999) . '-'. $request->file('photos')->getClientOriginalName();
            $path = $request->file('foto')->storeAs('uploads/' . $file_name);
            $data['photos'] = $path;
        }

        $product->update( $data);
        $product->save();
        return redirect()->route('admin.products')->with('status', 'product-updated');
    }

    public function destroy (Product $product) {
        $product->delete();
        return redirect()->route('admin.products')->with('status', 'Product deleted successfully.');
    }
}

