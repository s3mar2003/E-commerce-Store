@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">All Products</h1>

    <div class="mb-3">
        <a href="{{ url('/products/create') }}" class="btn btn-success">Add New Product</a>
    </div>

    @if($products->count() > 0)
        <div class="row">
            @foreach($products as $product)
               
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                     
                        @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                     @endif


                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                            <p class="card-text">
                                <strong>Status:</strong>
                                {{ $product->on_sale ? 'On Sale' : 'Not On Sale' }}
                            </p>
                        </div>

                        <div class="card-footer text-center">
                            <a href="{{ url('/products/' . $product->id) }}" class="btn btn-primary">View</a>

                            <a href="{{ url('/products/' . $product->id . '/edit') }}" class="btn btn-warning">Edit</a>

                            <form action="{{ url('/products/' . $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this product?')">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p>No products found.</p>
    @endif
</div>
@endsection
