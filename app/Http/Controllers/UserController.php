<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(User $user){
        return view('userview');
    }
    
        
    function store(request $request){
        $data = Product::all();
        auth()->user()->userprofile()->create([
            'username'=> $request->name,
            'email'=> $request->email,
            'phone_no' => $request->phone_no,
            ]);
        return view('welcome')->with('data',$data); 
    }
}
