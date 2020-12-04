@extends('layouts.app')
@section('title','CSK | Admin Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="bg-dark text-light text-center" style="border-radius: 5px;"> Welcome {{Auth::user()->name}} !</h1>
            <div class="card text-center" style="width:100%">
                <div class="card-header">AdminDashBoard</div>

                <img class="card-img-top" src="images/admindashboard/allproducts.png" alt="Card image"
                    style="width:100%">
                <div class="card-body">
                    <a href="/all" class="btn btn-outline-dark btn-primary mr-5"">See Your Products</a>
                    <a href="/product/create" class="btn btn-outline-dark btn-primary mr-5">Add Products</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection