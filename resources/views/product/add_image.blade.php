@extends('layouts.app')
@section('content')

<div class="container card p-5 mt-5">
    <form action="/product/images" enctype="multipart/form-data" method="POST">

        @csrf
        <div class="row offset-3">
            <div class="col-8 ">
                <!-- image -->
                <div class="form-group row">
                    <label for="product_image" class="col-md-4 col-form-label ">Product Image</label>
                    <input type="file" class="ml-3 form-control-file" id="product_image" name="product_image[]" multiple>

                    @error('product_image')
                    <strong>{{ $message }}</strong>
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