{{-- SEZIONE PRODOTTO --}}

@extends('layouts.main')

@section('content')

  <div class="product-container">

    <img src="{{ $array[$idProduct - 1]['src-h']}}" alt="">
    <img src="{{ $array[$idProduct - 1]['src-p']}}" alt="">
    <span class="product-title">{{ $array[$idProduct - 1]['titolo']}}</span>
    <span class="arrow-left"><a href=""><i class="fas fa-angle-left"></i></a></span>
    <span class="arrow-right"><a href=""><i class="fas fa-angle-right"></i></a></span>
    <div class="details">
      {!! $array[$idProduct - 1]['descrizione'] !!}
    </div>

  </div>

@endsection
