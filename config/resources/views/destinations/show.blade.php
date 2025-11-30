@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded-lg shadow">
    <img src="{{ asset('images/'.$destination['image']) }}" alt="{{ $destination['name'] }}" class="rounded mb-4 w-full max-w-lg mx-auto">
    <h1 class="text-3xl font-bold mb-3">{{ $destination['name'] }}</h1>
    <p><strong>Kategori:</strong> {{ $destination['category'] }}</p>
    <p><strong>Lokasi:</strong> {{ $destination['location'] }}</p>
    <p class="mt-4">{{ $destination['description'] }}</p>
    <a href="{{ route('destinations') }}" class="text-green-500 mt-6 inline-block">← Back</a>
</div>
@endsection