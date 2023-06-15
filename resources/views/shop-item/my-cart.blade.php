
@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{ asset('css/myCart.css') }}" type="text/css">


<div class="card mt-5">
    <div class="row ">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col"><h4><b>Shopping Cart</b></h4></div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>    
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://i.imgur.com/1GrakTl.jpg"></div>
                    <div class="col">
                        <div class="row text-muted fw-bold">Shirt</div>
                        <div class="row fw-bold">Cotton T-shirt</div>
                    </div>
                    <div class="col">
                       <input class="form-control text-center fs-6 d-inline ms-3" id="inputQuantity" type="num" readonly value="" style="max-width: 3rem; max-height:2rem; margin-top:40px;" />
                    </div>
                    <div class="col fw-bold">&euro; 44.00 <span class="close">&#10005;</span></div>
                </div>
            </div>


            
      
            <div class="back-to-shop"><a href="#" class="text-decoration-none">&leftarrow;</a><span class="text-muted fw-bold">Back to shop</span></div>

                    <div class="back-to-shop fixed-bottom text-center">
                      <a href="#" class="text-decoration-none">&leftarrow;</a>
                      <span class="text-muted fw-bold">Back to shop</span>
            
              </div>
              
        </div>
        <div class="col-md-4 summary">
            <div><h5><b>Summary</b></h5></div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS 3</div>
                <div class="col text-right">&euro; 132.00</div>
            </div>
            <form>
                <p>SHIPPING</p>
                <select><option class="text-muted">Standard-Delivery- &euro;5.00</option></select>
                <p>GIVE CODE</p>
                <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; 137.00</div>
            </div>
            <button class="btn-checkout">CHECKOUT</button>
        </div>
    </div>
    
</div>

@endsection