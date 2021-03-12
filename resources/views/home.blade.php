{{-- HOMEPAGE --}}

@extends('layouts.main')

@section('content')

  <div class="section">

    <div class="card lunga">
      <h2>LE LUNGHE</h2>
      @foreach ($array as $key => $value)

        @if ($value["tipo"] == "lunga")
          <div class="product-card">
            <a href="/products/{{$key + 1}}">
              <img src="{{$value["src"]}}" alt="">
            </a>
          </div>
        @endif

      @endforeach
    </div>

    <div class="card corta">
      <h2>LE CORTE</h2>
      @foreach ($array as $key => $value)

        @if ($value["tipo"] == "corta")
          <div class="product-card">
            <a href="/products/{{$key + 1}}">
              <img src="{{$value["src"]}}" alt="">
            </a>
          </div>
        @endif

      @endforeach
    </div>

    <div class="card cortissima">
      <h2>LE CORTISSIME</h2>
      @foreach ($array as $key => $value)

        @if ($value["tipo"] == "cortissima")
          <div class="product-card">
            <a href="/products/{{$key + 1}}">
              <img src="{{$value["src"]}}" alt="">
            </a>
          </div>
        @endif

      @endforeach
    </div>

  </div>

@endsection
