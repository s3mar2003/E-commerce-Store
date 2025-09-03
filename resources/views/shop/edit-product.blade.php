@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/products/' . $product->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="on_sale" class="form-check-input" id="on_sale" value="1" {{ $product->on_sale ? 'checked' : '' }}>
            <label class="form-check-label" for="on_sale">On Sale</label>
        </div>

        

        <button type="submit" class="btn btn-primary">Update Product</button>
        <a href="{{ url('/products') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection
