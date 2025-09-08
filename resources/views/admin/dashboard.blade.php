@extends('layouts.admin')

@section('content')
<h1 class="h2 mb-4">Dashboard</h1>

<div class="row">
    <div class="col-md-4">
        <div class="card text-white bg-primary mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Products</h5>
                <p class="card-text">{{ $totalProducts ?? App\Models\Product::count() }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Total Categories</h5>
                <p class="card-text">{{ $totalCategories ?? App\Models\Category::count() }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
