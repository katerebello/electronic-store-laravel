<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Cart;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); //so every single route will require autharization
    }

    public function index()
    {
        return view('/product/add_image_color');
    }

    public function create()
    {
        return view('product/create');
    }
    public function store()
    {
        // $data = request()->all();
        // dd($data);
        // dd(auth()->user()->adminprofile->product);
        $data = request()->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => ['required', 'integer'],
            'model_no' => ['required', 'integer'],
            'category' => 'required',
        ]);
        auth()->user()->adminprofile->product()->create([
            'product_name' => $data['product_name'],
            'product_description' => $data['product_description'],
            'product_price' => $data['product_price'],
            'model_no' => $data['model_no'],
            'category' => $data['category'],
        ]);

        return redirect('/product/add_image_color');
    }

    public function edit(Product $product)
    {
        // $product = Product::find($product->id);
        // dd($product->image);

        return view('product/edit', compact('product'));
    }

    public function update(Product $product)
    {
        // dd($product->image);
        // $data = request()->all();
        // dd($product->id);
        //dd($product);
        $data = request()->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => 'required | integer',
            'model_no' => 'required | integer',
        ]);

        Product::where('id', $product->id)->update(array_merge($data));
        // auth()->user()->product()->update(array_merge($data));

        return redirect("/product/" . $product->id  . "/edit_image_color");
    }

    public function addToCart(Request $request)
    {
        $cart = new Cart;
        $cart->users_id = auth()->user()->id;
        $cart->products_id = $request->input('products_id');
        $cart->qty = 1;

        $cart->save();
        return redirect('/')->with('info', 'Product added to cart Successfully.');
    }

    static function cartview()
    {
        return Product::all();
    }
    public function cartlist()
    {
        $userId = auth()->user()->id;

        $products = DB::table('cart')
            ->join('products', 'cart.products_id', '=', 'products.id')
            ->where('cart.users_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cartlist', ['products' => $products]);
    }
    static function removecart($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();
        return redirect('cartlist')->with('info', 'Product removed from cart Successfully.');
    }
    public function shop()
    {
        $products = Product::all();
        return view('/shop', compact('products')); 
    }

public function aboutus(){
return view('aboutus');
}
public function contactus(){
    return view('contactus');
    }
}
