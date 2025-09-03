@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="my-4">Create New Product</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
            @error('name')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" step="0.01" value="{{ old('price') }}">
            @error('price')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" name="on_sale" class="form-check-input" id="on_sale" value="1" {{ old('on_sale') ? 'checked' : '' }}>
            <label class="form-check-label" for="on_sale">On Sale</label>
            @error('on_sale')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>

       <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control">
            @error('image')
                <div class="text-danger mt-1">{{ $message }}</div>
            @enderror
        </div>



        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ url('/products') }}" class="btn btn-secondary ms-2">Cancel</a>
    </form>
</div>
@endsection
