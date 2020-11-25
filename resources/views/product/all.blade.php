@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            @foreach($products as $product)
            <h2>{{ $product->product_name}}</h2>
            <hr>
            @endforeach
            
        </div>
        
        <div class="col-lg-4">
            @foreach($productimages as $productimage)
            <img src="/storage/{{ $productimage->product_image }}" alt="" width="150" height="150" style="display: inline-block;">
            @endforeach
        </div>

        <div class="col-lg-4">
            <h2>Available in :</h2>
            @foreach($productcolors as $productcolor)
            <p>{{ $productcolor->color }}</p>
            @endforeach
            
        </div>
    </div>
</div>
@endsection