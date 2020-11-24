<?php

namespace App\Http\Controllers;

use App\Images;
use App\Product;
use App\User;
use App\Colors;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class Images_ColorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $user = User::all();
        $products = Product::all();
        $productimages = Images::all();
        $productcolors = Colors::All();
        return view('product/all', compact('user', 'products', 'productimages', 'productcolors'));
        
    }
    public function store()
    {
        // $data = request()->all();
        // dd($data);

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

        $store_color = [];
        foreach (request('color') as $index => $color) {
            $store_color[$index] = [
                'color' => $color,
                'product_id' => $product_id[0],
            ];
        }

        Colors::insert($store_color);

        return redirect('/all');
    }
}
