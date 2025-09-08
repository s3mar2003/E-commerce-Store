@extends('layouts.admin')

@section('content')
<h1 class="h2 mb-4">Products Management</h1>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Category</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ Str::limit($product->description, 50) }}</td>
                <td>${{ number_format($product->price, 2) }}</td>
                <td>{{ $product->category->name ?? 'No Category' }}</td>
                <td>
                    <button class="btn btn-sm btn-info">Edit</button>
                    <button class="btn btn-sm btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
