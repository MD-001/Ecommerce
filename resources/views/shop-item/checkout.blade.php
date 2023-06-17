@extends('layouts.app')

@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css//bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/LineIcons.3.0.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/tiny-slider.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/glightbox.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">

    <form action="{{ route('client.ConfirmeCheckout') }}" method="post">
        @csrf
    <section class="checkout-wrapper section">
        <div class="container">
            <div class="row justify-content-center">
                
                <div class="col-lg-8">
{{-- 
                    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
          &nbsp;&nbsp; <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


                    <div class="checkout-steps-form-style-1">
                        <ul id="accordionExample">
                            <li>
                                
                    
                                <h6 class="title collapsed" data-bs-toggle="collapse" data-bs-target="#collapsefive"
                                    aria-expanded="false" aria-controls="collapsefive">Payment Info</h6>
                                <section class="checkout-steps-form-content " id=""
                                    aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="checkout-payment-form">
                                                <div class="single-form form-default">
                                                    <label>Cardholder Name</label>
                                                    <div class="form-input form">
                                                        <input type="text"  class="form-control @error('Cardholder') is-invalid @enderror" placeholder="Cardholder Name" name="Cardholder" required>
                                                        @error('Cardholder')
                                                            <span class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                              </svg>
                                                          &nbsp;&nbsp;{{ $message }}</span>
                                                        @enderror
                                             
                                                    </div>
                                                </div>
                                                <div class="single-form form-default">
                                                    <label>Card Number</label>
                                                    <div class="form-input form">
                                                        <input id="credit-input" type="text" name="CardNumber" class="form-control @error('CardNumber') is-invalid @enderror" required
                                                            placeholder="0000 0000 0000 0000">
                                                        <img src=" {{ asset('images/payment/card.png') }}" alt="card">
                                                    </div>
                                                    @error('CardNumber')
                                                    <span class="text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                                      </svg>
                                                  &nbsp;&nbsp;{{ $message }}</span>
                                                @enderror
                                          
                                                </div>
                                                <div class="payment-card-info">
                                                    <div class="single-form form-default mm-yy">
                                                        <label>Expiration</label>
                                                        <div class="expiration d-flex">
                                                            <div class="form-input form">
                                                                <input type="number" placeholder="MM" name="MM-Date" class="form-control " required  >
                                                      
                                                         
                                                            </div>
                                                            <div class="form-input form">
                                                                <input  type="number" placeholder="YYYY" name="YYYY-Date" class="form-control " required >
                                                            
                                                           
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-form form-default">
                                                        
                                                        <label>CVC/CVV <span><i
                                                                    class="mdi mdi-alert-circle"></i></span></label>
                                                        <div class="form-input form ">
                                                            <input placeholder="***" class="form-control" name="CVC-CVV" required   type="number">
                                                       
                                                        
                                                            
                                                        </div>
                                                        
                                                    </div>
                                                   
                                                </div>
                                                <div class="single-form form-default button">
                                                    <button class="btn">pay now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </li>
                        </ul>
                    </div>
                </div>
           
                <div class="col-lg-4">
                    <div class="checkout-sidebar">

                        <div class="checkout-sidebar-price-table ">
                            <h5 class="title">Tableau des Tarifs</h5>

                            <div class="sub-total-price">
                                <div class="total-price">
                                    <p class="value">Sous TOTAL:</p>
                                    <p class="price"> {{ Cart::total() }} MAD</p>
                                </div>
                                <div class="total-price shipping">
                                    <p class="value">Prix de Livraison:</p>
                                    
                                    <p class="price">{{ session('prixLivraison'); }} MAD</p>
                                </div>
        
                            </div>

                            <div class="total-payable">
                                <div class="payable-price">
                                    <p class="value">Prix TOTAL:</p>
                                    <p class="price">{{ floatval(Cart::total(2, '.', '')) + floatval(session('prixLivraison')) }} MAD</p>
                                </div>
                            </div>
                            <div class="price-table-btn button">
                                <a href="javascript:void(0)" class="btn btn-alt">Continue shopping</a>
                            </div>
                        </div>
            
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
    <!--====== Checkout Form Steps Part Ends ======-->




    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/glightbox.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

@endsection