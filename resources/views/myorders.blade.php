@extends('layouts.master')
@section('title','CSK | My Orders')
@section('content')
<?php

use App\Http\Controllers\ProductController;

$data = ProductController::cartview();
?>
<main id="main">
    <div style="background-color:white;width:100%" class="container">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
            {{ session('info') }}
        </div>
        @endif
        <div class="custom product">
            <div class="col-sm-10">
                <div class="trending-wrapper">
                    <h1 style="text-align:center;margin-left:150px;font-weight:bold; font-size:25px"><b>Orders</b></h1><br>
                    @foreach($orders as $item)
                    <div class="row searched-item " style="margin-bottom:20px; border-bottom:1px solid #ccc;padding-bottom:20px">
                        <div class="col-sm-4">
                            @if(count($data)>0)
                                @foreach($data as $row)
                                    @if($row->id == $item->id)
                                    <img class="trending-image" src="../storage/{{ $row->image[0]->product_image}}" style="width:120px; height:120px">
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <br>
                                <h2>{{$item->product_name}}</h2>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h4>Delivery Status : {{$item->status}}</h4>
                                <h4>Address : {{$item->address}}</h4>
                                <h4>Payment Status : {{$item->payment_status}}</h4>
                                <h4>Payment Method : {{$item->payment_method}}</h4>
                            </div>
                        </div>

                    </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</main>
@endsection