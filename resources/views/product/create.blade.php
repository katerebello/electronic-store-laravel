@extends('layouts.app')
@section('title','CSK | Add Products')
@section('content')

<div class="container card p-5 mt-5 mb-5" style="box-shadow: 1px 1px 5px 2px black;">
    <form action="/product" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row offset-3">
            <div class="col-8">
                <div class="row">
                    <h3 class="pt-4 ml-3 h3" style="font-weight: bold;">ADD NEW product</h3>
                </div>

                <!--product-category-->
                <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label ">Product category</label>

                    <select id="category" class="ml-3 form-control @error('category')
                    is-invalid @enderror" name="category" category="category" value="{{ old('category') }}" 
                    autocomplete="category" autofocus required>
                        <option value="" selected="true" disabled="disabled">Select an Option</option>
                        <option value="Smartphones">SmartPhones</option>
                        <option value="Washingmachines">WashingMachines</option>
                        <option value="Laptops">Laptops</option>
                        <option value="cameras">Cameras</option>
                    </select>

                    @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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