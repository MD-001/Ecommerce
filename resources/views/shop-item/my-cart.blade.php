@extends('layouts.app')


@section('content')
<link rel="stylesheet" href="{{ asset('css/myCart.css') }}" type="text/css">
            @livewire('mycart', ['cart' => $cart])
@endsection