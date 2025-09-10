@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Products</h1>

    <table class="table">
        <thead>
            <tr>
                <th>#</th><th>Name</th><th>Category</th><th>Price</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @forelse($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->category?->name ?? '-' }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    @can('update', $product)
                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-primary">Edit</a>
                    @endcan

                    @can('delete', $product)
                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    @endcan
                </td>
            </tr>
        @empty
            <tr><td colspan="5">No products found.</td></tr>
        @endforelse
        </tbody>
    </table>

    {{ $products->links() }}
</div>
@endsection
