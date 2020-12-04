@extends('layouts.app')
@section('title','CSK | Your Products')
@section('content')

<div class="container">
<div class="row justify-content-center mt-5">
    <div class="col-auto">
        <h2>Your Products:</h2>
        <table border="1" class="table table-responsive" cellpadding="0" cellspacing="0">
            <tr class="text-center">
                <th>Model No</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Colors</th>
                <th>Images</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            @foreach($users_products as $users_product)
            <tr>
                <td>{{$users_product->model_no}}</td>
                <td>{{$users_product->product_name}}</td>
                <td>{{$users_product->category}}</td>
                <td>{{$users_product->product_price}}</td>
                <td>
                    @foreach ($users_product->color as $color)
                    {{$color->color}},
                    @endforeach
                </td>
                <td style="border-left:0px;width:300px">
                    @foreach ($users_product->image as $image)
                    <img src="../storage/{{ $image->product_image}}" class="w-25" alt="image">
                    @endforeach
                </td>
                <td> 
                    <a href="/product/{{$users_product->id}}/edit" class="btn btn-outline-dark btn-primary">Edit</a>
                </td>
                <td> 
                    <a href="/product/delete/{{$users_product->id}}" class="btn btn-outline-dark btn-danger">Delete</a>
                </td>

                <td> 
                    <a href="{{$users_product->id}}/productdetails" class="btn btn-outline-dark btn-primary">Details</a> 
                </td>
            </tr>
            @endforeach
        </table>
        <a href="/product/create" class="float-right btn btn-outline-dark btn-success">Add Products</a>
    </div>
</div>
</div>

@endsection