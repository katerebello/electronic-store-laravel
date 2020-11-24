@extends('layouts.app')

@section('content')
<form action="/storeuser" method="post">
    @csrf 
    
    <label for="username">Username:</label>
    <input type="text" name="name" value={{ $user->name }}>

    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}">

    <label for="company">Company:</label>
    <input type="text" name="company" >

    <button type="submit">SUBMIT</button>

</form>

@endsection