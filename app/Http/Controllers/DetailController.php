<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Image;
use App\Product;
use App\Color;
use Illuminate\Support\Facades\DB;

class DetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // change
    public function index(User $user, Product $product)
    {
        // dd(Product::find($product->id)->color);
        $users = auth()->user();
        // gives the logged in admin ka id
        // dd($user_id);

        $users_products = auth()->user()->product()->get();
        // gives the logged in admin ka products
        // dd($users_products);

        $users_products_id = auth()->user()->product()->pluck('id');
        //gives the logged in admin ka products id .. i.e 1 and 4 for now
        // dd($users_products_id);

        $images = Image::whereIn('product_id', $users_products_id)->pluck('product_image');
        $colors = Color::whereIn('product_id', $users_products_id)->pluck('color');
        // dd($colors);
        $image_ids = Image::whereIn('product_image', $images)->pluck('product_id');
        $color_ids = Color::whereIn('color', $colors)->pluck('product_id');
        // dd($color_ids);
        // echo($id);
        // echo($images);
        return view('product/all', compact('users', 'users_products', 'images', 'colors', 'image_ids', 'color_ids'));
    }

    public function store()
    {
        // $data = request()->all();
        // dd($data);
        $product_id = auth()->user()->product()->pluck('id');
        // dd($product_id[0]);
        $store_image = [];
        foreach (request('product_image') as $index => $image) {
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
        foreach (request('color') as $index => $color) {
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


    public function update(Product $product, User $user)
    {
        // dd(request()->all());
        $user = auth()->user()->id;
        if (request('color')) {
            $colors = Color::where('product_id', $product->id);
            // dd($colors);
            // iterate through the Collection
            foreach ($colors as $old_color) {
                $old_color->delete();
                // dd($color);
            }
            
            // dd($colors);
            // $colors->each->delete();
            $store_color = [];
            // dd(request('color'));
            foreach (request('color') as $index => $color) {
                $store_color[$index] = [
                    'color' => $color,
                    'product_id' => $product->id,
                ];
            }
            // Color::where('product_id', $product->id)->update(array_merge($store_color));
            // $product->color()->update(array_merge($store_color));
        }

        if (request('product_image')) {
            dd($user);
            $images = Image::where('product_id', $product->id)->pluck('product_image');
            
            $store_image = [];
            foreach (request('product_image') as $index => $image) {
                $image_path = $image->store('uploads', 'public');

                $store_image[$index] = [
                    'product_image' => $image_path,
                    'product_id' => $product->id,
                ];
            }
            $product->color()->update(array_merge($store_image));
        }

        return redirect("/all");
    }
}
