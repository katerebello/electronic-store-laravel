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
    
    function index(User $user)
    {
        //dd($user);
        return view('adminview',compact('user'));
    }

    function store(request $request){
        $data = request()->validate([
            'name' => ['required'],
            'email' => ['required','email:rfc,dns'],
            'phone_no' => ['required', 'digits:10'],
            'company' => ['required'],
        ]);
        auth()->user()->adminprofile()->create([
            'name'=> $data['name'],
            'email'=> $data['email'],
            'phone_no'=>$data['phone_no'],
            'company_name' => $data['company'],
        ]);
        return redirect('/admindashboard');
    }
}
