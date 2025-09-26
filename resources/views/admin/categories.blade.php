@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Categories</h1>

    <table class="table">
        <thead>
            <tr><th>#</th><th>Name</th><th>Products</th><th>Actions</th></tr>
        </thead>
        <tbody>
            @foreach($categories as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->products_count ?? 0 }}</td>
                    <td>
                        {{-- Example actions --}}
                        <a href="#" class="btn btn-sm btn-secondary">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}
</div>
@endsection
