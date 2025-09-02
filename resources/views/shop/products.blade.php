@extends('layouts.app')

@section('title', 'Products')

@section('content')
<h1>Our Products</h1>

@unless(empty($products))
    @foreach($products as $product)
        <div class="product-item">
            <h2>{{ $loop->index + 1 }}. {{ $product['name'] }} 
                @if($loop->first)
                    <span>(Featured)</span>
                @endif
            </h2>
            <p>{{ $product['description'] }}</p>
            <p>Price: ${{ $product['price'] }}</p>
            @if($product['on_sale'])
                <span class="badge badge-success">Sale</span>
            @else
                <span class="badge badge-secondary">Regular</span>
            @endif
        </div>
    @endforeach
@else
    <p>No products currently available.</p>
@endunless
@endsection
