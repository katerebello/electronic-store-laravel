<?php

namespace App\Http\Controllers;
use App\User;
use App\Image;
use App\Product;
use App\Color;
use Illuminate\Http\Request;
use App\Cart;
use App\Order;
use Auth;
use DB;


class OrderController extends Controller
{
    public function ordernow(){
        $userId=auth()->user()->id;
        $total=$products= DB::table('cart')
       ->join('products','cart.products_id','=','products.id')
       ->where('cart.users_id',$userId)
       ->sum('products.product_price');
     
       return view('ordernow',['total'=>$total]);
       }
    public function orderplace(Request $request)
    {
        $userId=auth()->user()->id;
        $allcart = Cart::where('users_id',$userId)->get();
        foreach($allcart as $cart)
        {
            $order=new Order;
            $order->products_id = $cart['products_id'];
            $order->users_id = $cart['users_id'];
            $order->status = "pending";
            $order->payment_method = $request->payment;
            $order->payment_status= "pending";
            $order->address= $request->address;
            $order->save();

            Cart::where('users_id',$userId)->delete();

        }
        
        return redirect('/')->with('info','Order placed Successfully.');
    }
    public function myorders()
    {
        $userId=auth()->user()->id;
        $orders= DB::table('orders')
       ->join('products','orders.products_id','=','products.id')
       ->where('orders.users_id',$userId)
       ->get();
     
       return view('myorders',['orders'=>$orders]);
    }
}
