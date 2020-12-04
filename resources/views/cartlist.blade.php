@extends('layouts.master')
@section('title','CSK | Cart')
@section('content')
<?php

use App\Http\Controllers\ProductController;

$data = ProductController::cartview();
?>
<main id="main">
    <div class="container">
    <div style="background-color:white;width:100%">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
        </div>
        @endif
        <div class="custom product">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    @if(count($products)==0)
                    <h1 style="text-align:center; margin-left:150px;font-weight:bold; font-size:25px">Cart Is empty</h1><br><br><br>
                    @else
                    <h1 style="text-align:center"><b>Your Cart</b></h1><br>
                    <!-- <a href="ordernow" class="btn btn-success">Order Now</a><br><br> -->
                    @foreach($products as $item)

                    <div class="row searched-item " style="margin-bottom:20px; border-bottom:1px solid #ccc;padding-bottom:20px">
                        <div class="col-sm-3">
                            @if(count($data)>0)
                            @foreach($data as $row)
                            @if($row->id == $item->id)

                            <img class="trending-image" src="../storage/{{ $row->image[0]->product_image}}" style="width:120px; height:120px">
                            @endif
                            @endforeach
                            @endif
                        </div>
                        <div class="col-sm-3" style="margin-top:20px;">
                                <h2>{{$item->product_name}}</h2>
                        </div>
                        <div class="col-sm-3" style="margin-top: 45px;">
                                <input type="number" name="quantity" value="1">
                                <h5>Rs.{{$item->product_price}}</h5>
                        </div>
                        <div class="col-sm-3" style="margin-top: 40px;">
                            <a href="/removecart/{{$item->cart_id}}"> <button class="btn btn-danger"> Remove from Cart</button></a>
                        </div>
                    </div>
                    @endforeach
                    <a href="ordernow" class="btn btn-success">Order Now</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
</main>
@endsection