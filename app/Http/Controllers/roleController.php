<?php

namespace App\Http\Controllers;

use App\User;
use App\userprofile;

use Illuminate\Http\Request;

class roleController extends Controller
{
    function user(User $user){
        return view('userview');
    }
    function admin(User $user){
        //dd($user);
        return view('adminview',compact('user'));
    }

    function store(request $request){
        //dd($request);
       /* $adminprofile = new adminprofile();

        $adminprofile->username = $request('name');
        $adminprofile->email = $request('email');
        $adminprofile->company_name = $request('company');*/
        //dd($request->email);
        auth()->user()->adminprofile()->create([
            'name'=> $request->name,
            'email'=> $request->email,
            'company_name' => $request->company,
        ]);

        return redirect('/');
    }
}
