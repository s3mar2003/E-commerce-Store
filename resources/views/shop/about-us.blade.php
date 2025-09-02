@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<h1>{{ $title }}</h1>
<p>{{ $description }}</p>

<div>{!! $rawHtml !!}</div>

<p>Current Year: @php echo date('Y'); @endphp</p>
@endsection
