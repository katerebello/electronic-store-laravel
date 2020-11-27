@extends('layouts.app')


<!-- katyyyy keep yourssssss  -->
@section('content')
<div class="container">
    <div class="row">
        @foreach($users_products as $product)
            <div class="col-lg-4">
                <h1>{{$product->product_name}}</h1>
                <p hidden>{{$x = $product->image->count()}}</p>
                <p hidden>{{$y = $product->color->count()}}</p>
                <a href="/product/{{$product->id}}/edit">Edit</a>
                <a href="/product/delete/{{$product->id}}">Delete</a>
            </div>
            <div class="col-lg-4">
            @for ($i = 0; $i < $x; $i++) 
                    <img src="/storage/{{$product->image[$i]->product_image}}" alt="" width="100" height="100">
                @endfor
            </div>
            <div class="col-lg-4">
                @for ($i = 0; $i < $y; $i++) 
                    <p>{{$product->color[$i]->color}}</p>
                @endfor
            </div>
        @endforeach
    </div>
</div>
@endsection