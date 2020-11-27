<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DeleteProductController extends Controller
{
    public function index(Product $product)
    {
        $product = Product::find($product->id);
        return view('product/delete', compact('product'));
    }
    public function destroy(Product $product)
    {
        $product = Product::find($product->id);
        $product->delete();
        return redirect('/home');
    }
}
