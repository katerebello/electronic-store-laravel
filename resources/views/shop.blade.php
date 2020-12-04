@extends('layouts.master')
@section('title','CSK | Shop')
@section('content')
<p hidden>{{ $role =  Auth::user()->role}}</p>  
<div class="container">
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 card p-5" style="padding:20px;margin:10px;text-align: center; box-shadow:1px 1px 5px 1px black;">
            <div class="mt-3">
                <div style="text-align: center;">
                    <img src="/storage/{{ $product->image[0]->product_image }}" alt="" width="200" height="200" class="p-2">
                </div>
                <h3>{{ $product->product_name }}</h3>
                <h5>Rs {{ $product->product_price }}/-</h5>

                <a href="/{{$product->id}}/productdetails">
                <button class="btn btn-success" class="">Details</button></a>
                @if ( $role == 'user')
                    <form action="/add_to_cart" method="POST" style="margin-top: 20px;">
                        @csrf
                        <input type="hidden" name="products_id" value="{{$product->id}}">
                        <button class="btn btn-primary mb-3">Add to Cart</button>
                    </form>
                @endif
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection