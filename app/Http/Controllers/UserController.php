<?php

namespace App\Http\Controllers;

use App\User;
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
        auth()->user()->userprofile()->create([
            'username'=> $request->name,
            'email'=> $request->email,
            'phone_no' => $request->phone_no,
            ]);
        return view('welcome');
    }
}
