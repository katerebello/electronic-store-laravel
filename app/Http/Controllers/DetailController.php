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
    public function index(User $user)
    {
        $user_id = auth()->user()->id;
        // dd($products);
        
        $users_products = auth()->user()->product()->get();
        // dd($users_products);

        $users_products_id = auth()->user()->product()->pluck('id');
        // dd($users_products_id);
        
        $productimages = [];
        foreach ($users_products as $index => $user_product){
            $productimages[$index] = Image::find($user_product->id);
            
        }
        //echo($productimages);
        // dd($product_id);
        // $products = Product::all();
        $productimages = Image::where('id', $users_products)->get();
        // dd($productimages);
        // dd($productimages);
        // $productcolors = Color::where('id', $product_id)->get();
        // dd($productcolors);
        return view('product/all', compact('user', 'products', 'productimages', 'productcolors'));
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

    public function edit(Product $product)
    {
        return view('product/edit_image_color', compact('product'));
    }


    public function update(Product $product)
    {   
        $user = auth()->user()->id;
        // dd($user);
        $pages = Product::where('id', $user)->with('color')->get();
        // $color = Color::where('id', )
        dd($pages);
        // foreach ($pages as $page){
        // }
        // $blog->delete();
        

        // if (request('color')) {
        //     $store_color = [];
        //     foreach (request('color') as $index => $color) {
        //         $store_color[$index] = [
        //             'color' => $color,
        //             'product_id' => $product->id,
        //         ];
        //     }

        //     // $product->color()->update(array_merge($store_color));
        // }

        // if (request('product_image')) {
        //     $store_image = [];
        //     foreach (request('product_image') as $index => $image) {
        //         $image_path = $image->store('uploads', 'public');

        //         $store_image[$index] = [
        //             'product_image' => $image_path,
        //             'product_id' => $product->id,
        //         ];
        //     }
        //     // $product->color()->update(array_merge($store_image));
        // }
        
        // $image = DB::table('images')->get(); 
        return redirect("/all");
    }
}
