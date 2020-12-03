@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-auto">
        <h1>Your Products:</h1>
        <table class="table table-responsive" border="1" cellpadding="0" cellspacing="0">
            <tr>
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
                <td> <a href="/product/{{$users_product->id}}/edit" class="btn btn-outline-dark btn-primary">Edit</a>
                </td>
                <td> <a href="/product/delete/{{$users_product->id}}" class="btn btn-outline-dark btn-danger">Delete</a>
                </td>

                <td> <a href="{{$users_product->id}}/productdetails"
                        class="btn btn-outline-dark btn-primary">Details</a> </td>
            </tr>
            @endforeach
        </table>
        <a href="/product/create" class="float-right btn btn-outline-dark btn-success">Add Products</a>
    </div>
</div>

@endsection