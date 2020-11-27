@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">        
           <h1>Confirm delete ..?</h1>
           <p>{{ $product->product_name }}</p>
           <form action="/product/{{ $product->id }}/delete" method="post">
           @csrf
           <div class="row pt-4 offset-3">
                    <button class="ml-3 btn btn-primary">delete</button>
                </div>
           </form>
        </div>
    </div>
</div>
@endsection