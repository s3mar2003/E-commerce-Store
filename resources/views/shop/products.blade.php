@extends('layouts.app')

@section('content')
<h1>Our Products</h1>

@unless(count($products))
    <p>No products currently available.</p>
@endunless

@foreach($products as $product)
    <div>
        <h2>{{ $loop->index + 1 }}. {{ $product['name'] }}</h2>
        <p>{{ $product['description'] }}</p>
        <p>Price: ${{ $product['price'] }}</p>

        @if($product['on_sale'])
            <span class="badge badge-success">Sale</span>
        @else
            <span class="badge badge-secondary">Regular</span>
        @endif

        @if($loop->first)
            <p><em>This is our first product!</em></p>
        @endif
    </div>
@endforeach
@endsection
