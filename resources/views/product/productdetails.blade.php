@extends('layouts.app')
@section('title','CSK | Product Details')
@section('content')
<p hidden>{{ $role =  Auth::user()->role}}</p>  
<div class="container card mt-5" style=" box-shadow:1px 1px 5px 1px black;">
    <div class="row  p-5">
        <div class="col-lg-5" style="font-size: 17px;">
            <label class="font-weight-bold">Name:</label>
            <span class="ml-2">{{ $product->product_name }}</span><br>
            <label class="font-weight-bold">Description:</label>
            <span class="ml-2">{{ $product->product_description }}</span><br>
            <label class="font-weight-bold">Price:</label>
            <span class="ml-2">{{ $product->product_price }}</span><br>
            <label class="font-weight-bold">Model No:</label>
            <span class="ml-2">{{ $product->model_no }}</span><br>
            <label class="font-weight-bold">Category:</label>
            <span class="ml-2">{{ $product->category }}</span><br>
        </div>
        <div class="col-lg-7">
            @foreach ($product->image as $image)
            <img src="/storage/{{ $image->product_image}}" alt="" width="200" height="200" class="p-2">
            @endforeach
        </div>
        <div class="col-lg-5">
            <h2>Available in:</h2>
            @foreach ($product->color as $product_color)
            <p>{{ $product_color->color }}</p>
            @endforeach
        </div>
        @if ( $role == 'user')
        <form action="/add_to_cart" method="POST" class="mt-4 ml-3">
            @csrf
            <input type="hidden" name="products_id" value="{{$product->id}}">
            <button class="btn btn-primary mb-3">Add to Cart</button>
        </form>
        @endif
    </div>
</div>
@endsection