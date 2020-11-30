@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p> WELCOME TO CSK-Estore {{Auth::user()->name}}</p>  
            <div class="card">
                <div class="card-header">{{ __('Home page') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    @if ( Auth::user()->role  == 'admin' )
                        <h1> You are logged in as admin!</h1>
                        <a href="/product/create">Add Products</a><br>
                        <a href="/all">See your products</a>
                    @else
                        <h1> You are logged in as user!</h1>
                    @endif 

                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection