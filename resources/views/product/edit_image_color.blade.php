@extends('layouts.app')
@section('title','CSK | Edit Details')
@section('content')

<div class="container card p-5 mt-5" style="overflow: auto;">
    <form action="/product/detail/{{ $product->id }}" enctype="multipart/form-data" method="post">
        @csrf
        <!--csrf is used to authenticate that form before submitting the end point ie the add posts button in this case-->

        <!--above in form at tributes the method should be get or post so actually its been overwritten with put or patch as there put and patch are not supported-->
        @method('PATCH')

        <div class="container">
            <div class="row">
                <div class="col-8 offset-2">
                    <!-- image -->
                <div class="form-group row">
                    <label for="product_image" class="col-md-4 col-form-label ">Product Image</label>
                    <input type="file" class="ml-3 form-control-file" id="product_image" 
                    name="product_image[]"  multiple>

                    @error('product_image')
                    <strong>{{ $message }}</strong>
                    @enderror

                </div>

                <!-- color -->
                <div class="form-group row">
                    <label for="color" class="col-md-4 col-form-label ">Product Color</label>

                    <select id="color" class="ml-3 form-control @error('color')
                    is-invalid @enderror" name="color[]" color="color" multiple 
                    value="{{ old('color') }}" 
                    autocomplete="color" autofocus >
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
            <div class="row pt-4 offset-3">
                <button class="ml-3 btn btn-primary">Add</button>
            </div>

        </div>

    </form>
</div>
@endsection