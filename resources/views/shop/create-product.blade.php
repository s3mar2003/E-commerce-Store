@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Product</h2>

    {{-- عرض الأخطاء --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- عرض الرسائل --}}
    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Description:</label><br>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <label>Price:</label><br>
        <input type="number" name="price" step="0.01" value="{{ old('price') }}"><br><br>

        <label>On Sale:</label><br>
        <input type="checkbox" name="on_sale" value="1" {{ old('on_sale') ? 'checked' : '' }}><br><br>

        <label>Image:</label><br>
        <input type="file" name="image"><br><br>

        <button type="submit">Save</button>
    </form>
</div>
@endsection
