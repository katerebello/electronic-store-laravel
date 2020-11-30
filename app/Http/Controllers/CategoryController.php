<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $products = Product::all();
        $smartphones = Product::where('category',"=",'Smartphones')->get();
        //dd($smartphones);
        $washingmachines = Product::where('category',"=",'Washingmachines')->get();
        $mobiles = Product::where('category',"=",'Mobiles')->get();
        $cameras = Product::where('category',"=",'cameras')->get();
        $laptops = Product::where('category',"=",'laptops')->get();

        return view('welcome',compact('products','smartphones','washingmachines','laptops','cameras'));
    }
}
