<?php

namespace App\Http\Controllers;

use App\Images;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $user = User::all();
        $products = Product::all();
        $productImages = Images::all();
        return view('product/all', compact('user', 'products', 'productImages'));
    }
    public function store()
    {
        // $product = Product::find('user_id');
        $product_id = auth()->user()->products->pluck('id');
        // dd($product_id[0]);

        $store_image = [];
        foreach (request('product_image') as $index => $image) {
            // dd($index+1);
            $image_path = $image->store('uploads', 'public');
            $image1 = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200);
            $image1->save();
            // dd($image_path);
            $store_image[$index] = [
                'product_image' => $image_path,
                'product_id' => $product_id[0],
            ];
        }

        Images::insert($store_image);

        return redirect('/all');
    }
}
