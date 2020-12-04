<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Product;
use App\Color;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // change
    public function index(User $user)
    {  
        $users_products = auth()->user()->adminprofile->product()->get();
        return view('product/all', compact('users_products')); 
    }

    public function store()
    {
        // $data = request()->all();
        // dd($data);
        $product_id = auth()->user()->adminprofile->product()->pluck('id');
        // dd($product_id[0]);
        $store_image = [];
        foreach (request('product_image') as $index => $image) 
        {
            $image_path = $image->store('uploads', 'public');

            // no idea why it gives err
            // $image1 = Image::make(public_path("storage/{$image_path}"))->fit(1200, 1200);
            // $image1->save();

            $store_image[$index] = [
                'product_image' => $image_path,
                'product_id' => $product_id[0],
            ];
        }
        Image::insert($store_image);
        $store_color = [];
        foreach (request('color') as $index => $color) 
        {
            $store_color[$index] = [
                'color' => $color,
                'product_id' => $product_id[0],
            ];
        }
        Color::insert($store_color);

        return redirect('/all');
    }

    public function edit(Product $product, User $user)
    {
        return view('product/edit_image_color', compact('product'));
    }

    public function update(Product $product)
    {
        $product = Product::find($product->id);
        if (request('color')) 
        {
            $product->color->each->delete();
            $store_color = [];
            foreach (request('color') as $index => $color) 
            {
                $store_color[$index] = [
                    'color' => $color,
                    'product_id' => $product->id,
                ];
            }
            Color::insert($store_color);
        }

        if (request('product_image')) 
        {
            $product->image->each->delete();
            $store_image = [];
            foreach (request('product_image') as $index => $image) 
            {
                $image_path = $image->store('uploads', 'public');

                $store_image[$index] = [
                    'product_image' => $image_path,
                    'product_id' => $product->id,
                ];
            }
            Image::insert($store_image);
        }
        return redirect("/all");
    }
    public function detail(Product $product)
    {
        return view('product/productdetails', compact('product')); 
    }
}
