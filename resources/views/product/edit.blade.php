@extends('layouts.app')
@section('title','CSK | Edit Details')
@section('content')

<div class="container card p-5 mt-5" style="overflow: auto;">
    <form action="/product/{{ $product->id }}" enctype="multipart/form-data" method="post">
        @csrf
        <!--csrf is used to authenticate that form before submitting the end point ie the add posts button in this case-->

        <!--above in form at tributes the method should be get or post so actually its been overwritten with put or patch as there put and patch are not supported-->
        @method('PATCH')

        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit product details</h1>
                    </div>

                    <div class="form-group row">
                        <label for="product_name" class="col-md-4 col-form-label ">Product Name</label>

                        <input id="product_name" type="text" class="ml-3 form-control @error('product_name')
                        is-invalid @enderror" name="product_name" product_name="product_name"
                            value="{{ old('product_name') ?? $product->product_name }} " autocomplete="product_name"
                            autofocus>

                        @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <!-- desc -->
                    <div class="form-group row">
                        <label for="product_description" class="col-md-4 col-form-label ">Product Desc</label>

                        <input id="product_description" type="text" class="ml-3 form-control @error('product_description')
                         is-invalid @enderror" name="product_description" product_description="product_description"
                            value="{{ old('product_description') ?? $product->product_description }}"
                            autocomplete="product_description" autofocus>

                        @error('product_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <!-- price -->
                    <div class="form-group row">
                        <label for="product_price" class="col-md-4 col-form-label ">Product Price</label>

                        <input id="product_price" type="text" class="ml-3 form-control @error('product_price')
                        is-invalid @enderror" name="product_price" product_price="product_price"
                            value="{{ old('product_price') ?? $product->product_price }}" autocomplete="product_price"
                            autofocus>

                        @error('product_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="model_no" class="col-md-4 col-form-label ">Model No</label>

                        <input id="model_no" type="text" class="ml-3 form-control @error('model_no')
                        is-invalid @enderror" name="model_no" model_no="model_no"
                            value="{{ old('model_no') ?? $product->model_no }}" autocomplete="model_no" autofocus>

                        @error('model_no')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

            </div>
            <div class="row pt-4 offset-3">
                <button class="ml-3 btn btn-outline-dark btn-primary">Add</button>
            </div>

        </div>

    </form>
</div>
@endsection