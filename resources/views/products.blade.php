{{-- SEZIONE PRODOTTO --}}

@extends('layouts.main')

@section('content')

  <div class="product-container">

    <span class="arrow-left">

      @if ($idProduct == 1)
        <a href="/products/{{ count($array) }}">
          <i class="fas fa-angle-left"></i>
        </a>
      @else
        <a href="/products/{{ $idProduct - 1 }}">
          <i class="fas fa-angle-left"></i>
        </a>
      @endif

    </span>

    <img src="{{ $array[$idProduct - 1]['src-h']}}" alt="">
    <img src="{{ $array[$idProduct - 1]['src-p']}}" alt="">
    <span class="product-title">
      {{ $array[$idProduct - 1]['titolo']}}
    </span>

    <span class="arrow-right">

      @if ($idProduct == count($array))
        <a href="/products/1">
          <i class="fas fa-angle-right"></i>
        </a>
      @else
        <a href="/products/{{ $idProduct + 1 }}">
          <i class="fas fa-angle-right"></i>
        </a>
      @endif

    </span>

    <div class="details">
      {!! $array[$idProduct - 1]['descrizione'] !!}
    </div>

  </div>

@endsection
