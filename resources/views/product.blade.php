@extends('layouts.main')

@section('content')

<section class="product-detail {{ $product['src-h'] }}">

  {{-- parte di navigazione all'interno dei prodotti --}}
  <div class="product-arrows">

    @if ($id > 0)
      <a href="{{ route('product', $id - 1 ) }}"> &lt; PREV </a>
    @endif

    @if ($id < $length)
      <a href="{{ route('product', $id + 1 ) }}"> NEXT &gt; </a>
    @endif

  </div>

  {{-- output img e descrizione --}}
  <div class="hero">
      <h1>{{ $product['titolo'] }}</h1>
      <img class="size-img" src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
      <img class="size-img" src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
      <p>{!! $product['descrizione'] !!}</p>
  </div>
  <div class="description">

  </div>

</section>

@endsection
