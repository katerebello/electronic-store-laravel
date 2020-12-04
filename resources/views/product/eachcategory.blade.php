@extends('layouts.app')
@section('title','CSK | Search')
@section('content')
<div class="text-center">
    Search For <b>" {{ $category }} "</b>
</div>
@forelse($products as $product)
<div class="container">
    <div class="row p-3 m-3" style="border: 1px solid black;">
        <div class="col-lg-4">
            <h2>{{ $product->product_name}}</h2>
            <hr>
            <b>Category:</b>
            <p>{{ $product->category}}</p>
            @foreach ($product->image as $image)
            <img src="storage/{{ $image->product_image}}" class="w-25" alt="image">
            @endforeach
        </div>

        <div class="col-lg-4">
            <a href="/product/{{$product->id}}/edit"><button class="btn btn-outline-dark btn-primary">EDIT</button> </a>
            <a href="/product/delete/{{$product->id}}"><button class="btn btn-outline-dark btn-danger">DELETE</button>
            </a>
        </div>

        <div class="col-lg-4">
            <h2>Available in :</h2>
            @foreach ($product->color as $color)
            <span>{{$color->color}}</span>
            @endforeach

        </div>
    </div>
</div>
@empty
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="text-align:center; margin-top:200px;">
            <p class="font-weight-bold" style="font-size: 18px;color:red;background-color:black;">No products added !!
            </p>
            <a href="/product/create" style="color: black;text-decoration:none;font-size: 16px;">Add Products ?</a>
        </div>
    </div>
</div>
@endforelse
@endsection