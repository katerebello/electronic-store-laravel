@extends('layouts.master')
@section('title','CSK | Order Now')
@section('content')
<?php

use App\Http\Controllers\ProductController;

$data = ProductController::cartview();
?>
<main id="main">
  <div class="container">
    <div style="background-color:white;width:100%">
      @if (session('info'))
        <div class="alert alert-success" role="alert">
          {{ session('info') }}
        </div>
      @endif
      <div class="custom product">
        <div class="col-sm-10">
          <table class="table">
            <tbody style="font-size: 18px;">
              <tr>
                <td>Amount</td>
                <td>Rs. {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>Rs. 0</td>
              </tr>
              <tr>
                <td>Delivery charges</td>
                <td>Rs. 500</td>
              </tr>
              <tr>
                <th>Total Amount</th>
                <th>Rs. {{$total+500}}</th>
              </tr>
            </tbody>
          </table>
          <form action="/orderplace" method="POST" style="margin-top:60px;">
            @csrf
            <div class="form-group" style="margin-bottom: 40px;">
              <h2>Billing details</h2>
              <textarea name="address" class="form-control" placeholder="Enter your address"></textarea>
            </div>
            <div class="form-group">
              <label for="payment"><h4>Payment Method</h4></label><br><br>
              <input type="radio" value="Cash on delivery" name="payment">&nbsp;<span>Online payment</span><br><br>
              <input type="radio" value="Cash on delivery" name="payment">&nbsp;<span>EMI payment</span><br><br>
              <input type="radio" value="Cash on delivery" name="payment">&nbsp;<span>Cash on Delivery</span><br><br>
            </div>

            <button type="submit" class="btn btn-success">Order Now</button>
          </form>
          <br><br>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection