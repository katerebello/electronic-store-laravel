@extends('layouts.app')

@section('content')
@foreach($users_products as $users_product)
<div class="container">
    <div class="row" style="border 1px solid black">
        <div class="col-lg-4" >
            <h2>{{ $users_product->product_name}}</h2>
            <hr>
            @foreach ($users_product->image as $image)

            <img src="storage\{{ $image->product_image}}" class="w-25" alt="image">
            @endforeach
        </div>
        
        <div class="col-lg-4">
            <a href="/product/{{$users_product->id}}/edit"><button>EDIT</button> </a>
            <a href="/product/delete/{{$users_product->id}}"><button>DELETE</button> </a>
        </div>

        <div class="col-lg-4">
            <h2>Available in :</h2>
            @foreach ($users_product->color as $color)
                {{$color->color}}
            @endforeach
            
        </div>
    </div>
</div>
@endforeach
@endsection