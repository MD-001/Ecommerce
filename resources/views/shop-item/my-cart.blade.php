@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{ asset('css/myCart.css') }}" type="text/css">



    {{-- {{ dd(Cart::total()); }} --}}

    {{-- @foreach($cart  as $cartItem)
    <div class="cart-item">
        <p>{{ $cartItem->name }}</p>

    </div>
@endforeach --}}
    
        {{-- test livelire --}}
        @livewire('mycart', ['cart' => $cart])

@endsection