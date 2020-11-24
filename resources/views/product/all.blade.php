@extends('layouts.app')

@section('content')
<div>
    @foreach($products as $product)
    <h2>{{ $product->product_name}}</h2>
    <input type="color" name="" id="" value="{{ $product->color }}">
    @endforeach

    @foreach($productImages as $images)
    <img src="/storage/{{ $images->product_image }}" alt="" width="200" height="200">
    @endforeach
</div>
@endsection