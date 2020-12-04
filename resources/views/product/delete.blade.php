@extends('layouts.app')
@section('title','CSK | Confirm Delete')
@section('content')


<div class="card  m-5 ">
    <div class="card-header text-center">
        <h1>Confirm delete?</h1>
    </div>
    <div class="container card-body text-center">
        <div class="row">
            <div class="col-lg-3">
                <h3>{{$product->product_name}}</h3>
            </div>
            <div class="col-lg-3">
                <form action="/product/{{ $product->id }}/delete" method="post">
                    @csrf
                    <button class="p-2 btn-outline-dark btn-primary">Delete</button>
                </form>
            </div>
            <div class="col-lg-3">
                <a href="/all"><button class="p-2 btn-outline-dark btn-primary ">Cancel</button></a>
            </div>
        </div>
    </div>
</div>
@endsection