@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1 class="text-4xl font-bold mb-4">Welcome to Indonesia Tourism Website</h1>
    <p class="text-lg mb-6">Discover the natural beauty and rich culture from Sabang to Merauke!</p>
    <a href="{{ route('destinations') }}" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-yellow-600">Explore Now</a>
</div>
@endsection