@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div>
        <h2>{{ $product['name'] }}</h2>
        <p>{{ $product['description'] }}</p>
        <p>Price: ${{ $product['price'] }}</p>

        @if($product['on_sale'])
            <span class="badge badge-success">Sale</span>
        @else
            <span class="badge badge-secondary">Regular</span>
        @endif
    </div>
@endsection
