@extends('layouts.master')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach($products as $product)
        <div class="col-lg-3 card m-4" style="text-align: center; box-shadow:1px 1px 5px 1px black;">
            <div class="mt-3">
                <div style="text-align: center;">
                    <img src="/storage/{{ $product->image[0]->product_image }}" alt="" width="150" height="150" class="p-2">
                </div>
                <h3>{{ $product->product_name }}</h3>
                <h5>Rs {{ $product->product_price }}/-</h5>

                <a href="/{{$product->id}}/productdetails">
                <button class="btn btn-success">Details</button></a>
                <form action="/add_to_cart" method="POST" class="mt-4">
                    @csrf
                    <input type="hidden" name="products_id" value="{{$product->id}}">
                    <button class="btn btn-primary mb-3">Add to Cart</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection