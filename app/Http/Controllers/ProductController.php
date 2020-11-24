<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProductController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');//so every single route will require autharization
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

        $data = request()->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'product_price' => ['required', 'integer'],
            'model_no' => ['required', 'integer'],
        ]); 
        auth()->user()->products()->create([
            'product_name' => $data['product_name'],
            'product_description' => $data['product_description'],
            'product_price' => $data['product_price'],
            'model_no' => $data['model_no'],
        ]);
    
        return redirect('/product/add_image_color');
    }
}
