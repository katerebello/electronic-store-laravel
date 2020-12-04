<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $smartphones = Product::where('category',"=",'Smartphones')->get();
        $washingmachines = Product::where('category',"=",'Washingmachines')->get();
        $mobiles = Product::where('category',"=",'Mobiles')->get();
        $cameras = Product::where('category',"=",'cameras')->get();
        $laptops = Product::where('category',"=",'laptops')->get();
        return view('welcome',compact('products','smartphones','washingmachines','laptops','cameras'));
    }

    public function show()
    {
        //dd(request()->all());
        //dd(request()->category);
        $category = request()->category;
        if(request()->category == 'Smartphones'){
            $products = Product::where('category',"=","Smartphones")->get();
        }
        else if(request()->category == 'Washingmachines'){
            $products = Product::where('category',"=","Washingmachines")->get();
        }
        elseif (request()->category == 'Laptops'){
            $products = Product::where('category',"=","Laptops")->get();
        }
        else {
            $products = Product::where('category',"=","Cameras")->get();
        }
        return view('\product\eachcategory', compact('products','category'));
    }
}