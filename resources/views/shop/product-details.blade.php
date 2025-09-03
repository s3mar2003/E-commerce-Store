@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Product Details</h1>

    <div class="card mb-4">
        @if($product->image)
           <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top mb-3" alt="{{ $product->name }}">
            @endif

       
        <div class="card-body">
            <h3 class="card-title">{{ $product->name }}</h3>
            <p class="card-text">{{ $product->description }}</p>
            <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
            <p class="card-text">
                <strong>Status:</strong>
                {{ $product->on_sale ? 'On Sale' : 'Not On Sale' }}
            </p>
        </div>

        <div class="card-footer">
            <a href="{{ url('/products') }}" class="btn btn-secondary">Back to Products</a>
            <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-warning">Edit Product</a>

            <form action="{{ url('/products/' . $product->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('Are you sure you want to delete this product?')">
                    Delete Product
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
