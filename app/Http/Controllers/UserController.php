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
    
        
   public function store(request $request){
        $data = request()->validate([
            'name' => ['required'],
            'email' => ['required','email'],
            'phone_no' => ['required', 'digits:10'],
        ]);
        auth()->user()->userprofile()->create([
            'username'=> $data['name'],
            'email'=> $data['email'],
            'phone_no' => $data['phone_no'],
            ]);
        return redirect('/');
        //return view('welcome')->with('data',$data); 
    }
}
