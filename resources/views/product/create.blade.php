@extends('layouts.app')
@section('content')

<div class="container card p-5 mt-5">
    <form action="/product" enctype="multipart/form-data" method="POST">

        @csrf
        <div class="row offset-3">
            <div class="col-8 ">

                <div class="row">
                    <h3 class="pt-4 ml-3 h3" style="font-weight: bold;">ADD NEW product</h3>
                </div>

                <div class="form-group row">
                    <label for="product_name" class="col-md-4 col-form-label ">Product Name</label>

                    <input id="product_name" type="text" class="ml-3 form-control @error('product_name')
             is-invalid @enderror" name="product_name" product_name="product_name" value="{{ old('product_name') }}" autocomplete="product_name" autofocus>

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
             is-invalid @enderror" name="product_description" product_description="product_description" value="{{ old('product_description') }}" autocomplete="product_description" autofocus>

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
                    is-invalid @enderror" name="product_price" product_price="product_price" value="{{ old('product_price') }}" autocomplete="product_price" autofocus>

                    @error('product_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- color -->
                <div class="form-group row">
                    <label for="color" class="col-md-4 col-form-label ">Product Color</label>

                    <input type="color" name="color" id="color" multiple class="ml-3 form-control @error('color')
                    is-invalid @enderror" color="color" value="{{ old('color') }}" autocomplete="color" autofocus >

                    <!-- <input id="color" type="text" class="ml-3 form-control @error('color')
                    is-invalid @enderror" name="color" color="color" value="{{ old('color') }}" autocomplete="color" autofocus> -->

                    @error('color')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- model no -->
                <div class="form-group row">
                    <label for="model_no" class="col-md-4 col-form-label ">Model No</label>

                    <input id="model_no" type="text" class="ml-3 form-control @error('model_no')
                    is-invalid @enderror" name="model_no" model_no="model_no" value="{{ old('model_no') }}" autocomplete="model_no" autofocus>

                    @error('model_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
        </div>

        
        <!-- to submit -->
        <div class="row pt-4 offset-3">
            <button class="ml-3 btn btn-primary">Add</button>
        </div>
    </form>

</div>
@endsection