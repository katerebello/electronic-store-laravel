<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //dd(Auth()->User());
        if(Auth()->User()->role == 'user'){
            return redirect('userprofile/'. Auth()->User()->id);
        }
        else{
            return redirect('adminprofile/'. Auth()->User()->id);
        }
       // return view('home');
    }
    public function show(){
        return view('home');
    }



}



