@extends('layouts.app')

@section('content')
<!-- <h1>{{ $users_products }}</h1>
<h1>{{ $images }}</h1>
<h1>{{ $colors }}</h1>
<h1>{{ $image_ids }}</h1>
<h1>{{ $color_ids }}</h1> -->
<div class="container">
    <div class="row">
        <div class="col-lg-4">        
            @foreach($users_products as $product)
                <h2>{{ $product->product_name}}</h2>
                @foreach($image_ids as $index=>$id )
                        @if($product->id == $id)
                            <img src="/storage/{{$images[$index]}}" alt="" width="100" height="100">
                        @endif
                @endforeach
                
                <a href="/product/{{$product->id}}/edit">Edit</a>
                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection