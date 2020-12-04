@extends('layouts.app')
@section('title','CSK | Add Details')
@section('content')

<div class="container card p-5 mt-5" style="box-shadow: 1px 1px 5px 2px black;">
    <form action="/product/images_color" enctype="multipart/form-data" method="POST">

        @csrf
        <div class="row offset-3">
            <div class="col-8 ">
                <!-- image -->
                <div class="form-group row">
                    <label for="product_image" class="col-md-4 col-form-label ">Product Image</label>
                    <input type="file" class="ml-3 form-control-file" id="product_image" name="product_image[]" 
                    multiple required>

                    @error('product_image')
                    <strong>{{ $message }}</strong>
                    @enderror

                </div>

                <!-- color -->
                <div class="form-group row">
                    <label for="color" class="col-md-4 col-form-label ">Product Color</label>

                    <select id="color" class="ml-3 form-control @error('color')
                    is-invalid @enderror" name="color[]" color="color" multiple value="{{ old('color') }}" 
                    autocomplete="color" autofocus required>
                        <option value="" selected="true" disabled="disabled">Select an Option</option>
                        <option value="White">White</option>
                        <option value="Black">Black</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                    </select>

                    @error('color')
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