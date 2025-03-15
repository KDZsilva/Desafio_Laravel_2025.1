<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public function index (){
        $products = Product::orderBy('id', 'desc')->with('category', 'photos')->paginate(5);

        return view('admin.products', ['products' => $products]);
    }

    public function editPage ($product_id){
        $product = Product::find($product_id);
        $product->load( 'photos');
        $categories = Category::all();

        return view ('admin.product-update', ['product' => $product, 'categories' => $categories]);
    }

    public function view ($product_id){
        $product = Product::find($product_id);
        $product->load( 'photos');

        return view ('admin.products-view', ['product' => $product]);
    }

    public function update (Product $product, Request $request){
        $data = $request->all();
        DB::transaction(function () use ($request, $product, $data) {

            if($request->hasFile('thumbnail')) {
                //deleta a imagem anterior se tiver
                if ($product->thumbnail) {
                    Storage::delete($product->thumbnail);
                }

                $file_name = rand(0, 999999999) . '-'. $request->file('thumbnail')->getClientOriginalName();
                $path = $request->file('thumbnail')->storeAs('uploads/' . $file_name);
                $data['thumbnail'] = $path;
            }
            else {
                $data['thumbnail'] = $product->thumbnail;
            }
            $product->update( $data);
            $product->save();

            $category = Category::findOrFail($data['category_id']);
            $category->update($data);
            $category->save();
        });

        return redirect()->route('admin.products')->with('status', 'product-updated');
    }

    public function destroy (Product $product) {
        $product->delete();
        return redirect()->route('admin.products')->with('status', 'Product deleted successfully.');
    }
}

