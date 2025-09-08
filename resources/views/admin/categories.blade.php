@extends('layouts.admin')

@section('content')
<h1 class="h2 mb-4">Categories Management</h1>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th><th>Name</th><th>Total Products</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products->count() }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
