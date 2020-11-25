<?php

namespace App\Http\Controllers;

use App\User;
use App\userprofile;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(User $user){
        //dd($user);
        return view('adminview',compact('user'));
    }

    function store(request $request){
        auth()->user()->adminprofile()->create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone_no'=>$request->phone_no,
            'company_name' => $request->company,
        ]);

        return redirect('/admindashboard');
    }
}
