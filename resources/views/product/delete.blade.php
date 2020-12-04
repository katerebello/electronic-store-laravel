@extends('layouts.app')

@section('content')


<div class="card  m-5 ">
    <div class="card-header text-center">
        <h1>Confirm delete?</h1>
        {{$product->product_name}}
    </div>
    <div class="card-body text-center">
        <div class="container row">
            <div class="col-md-6">
                <a href="/all"><button class="p-2 btn-outline-dark btn-primary ">Cancel</button></a>
            </div>
            <div class="col-md-6">
                <form action="/product/{{ $product->id }}/delete" method="post">
                    @csrf

                    <button class="p-2 btn-outline-dark btn-primary">Delete</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection