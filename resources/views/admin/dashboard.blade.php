@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <div>
        <p>Products: {{ $productsCount }}</p>
        <p>Categories: {{ $categoriesCount }}</p>
    </div>

    <h3>Latest Products</h3>
    <ul>
        @foreach($latestProducts as $p)
            <li>{{ $p->name }} — {{ $p->category?->name ?? 'Uncategorized' }}</li>
        @endforeach
    </ul>
</div>
@endsection
