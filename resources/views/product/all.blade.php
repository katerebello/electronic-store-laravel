@extends('layouts.app')

@section('content')
<div style="text-align: center;">
    <a href="/admindashboard">Dashboard</a>
    @if(count($users_products) != 0)
        <a href="/product/create">Add Products ??</a>
    @endif
</div>
    
@forelse($users_products as $users_product)
<div class="container">
    <div class="row p-3 m-3" style="border: 1px solid black;">
        <div class="col-lg-4">
            <h2>{{ $users_product->product_name}}</h2>
            <hr>
            <b>Category:</b>
            <p>{{ $users_product->category}}</p>
            @foreach ($users_product->image as $image)
            <img src="../storage/{{ $image->product_image}}" class="w-25" alt="image">
            @endforeach
        </div>

        <div class="col-lg-4">
            <a href="/product/{{$users_product->id}}/edit"><button>EDIT</button> </a>
            <a href="/product/delete/{{$users_product->id}}"><button>DELETE</button> </a>
        </div>

        <div class="col-lg-4">
            <h2>Available in :</h2>
            @foreach ($users_product->color as $color)
            <span>{{$color->color}}</span>
            @endforeach

        </div>
    </div>
</div>
@empty
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12" style="text-align:center; margin-top:200px;">
            <p class="font-weight-bold" style="font-size: 18px;color:red;background-color:black;">No products added !!</p>
            <a href="/product/create" style="color: black;text-decoration:none;font-size: 16px;">Add Products ?</a>
        </div>
    </div>
</div>
@endforelse
@endsection