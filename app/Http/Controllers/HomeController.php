<?php

namespace App\Http\Controllers;

use App\User;
use App\userprofile;
use App\adminprofile;
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
        if(Auth()->User()->role == 'user'){
            $has_user = userprofile::where('user_id','=',Auth()->User()->id)->count();
            //checks if user is already a user
            if($has_user !=0){
                return redirect('/');
            }
            return redirect('userprofile/'. Auth()->User()->id);
        }
        else{ 
            $has_admin = adminprofile::where('user_id','=',Auth()->User()->id)->count();
            //checks if user is already a admin
            if($has_admin !=0){
                return redirect('admindashboard');
            }
            return redirect('adminprofile/'. Auth()->User()->id);
        }
    }
}



