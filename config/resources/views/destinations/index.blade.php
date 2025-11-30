@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">List of Tourist Attractions</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach($destinations as $destination)
        <div class="bg-white rounded-lg shadow p-4">
            
            <img src="{{ asset('/images/'.$destination['image']) }}" 
                 alt="{{ $destination['name'] }}"
                 class="rounded mb-3 w-full h-32 object-cover">

            <h2 class="text-xl font-semibold">{{ $destination['name'] }}</h2>
            <p class="text-sm text-gray-600">{{ $destination['category'] }}</p>

            <p class="mt-2">{{ Str::limit($destination['description'], 80) }}</p>

            <a href="{{ route('destination.show', $destination['id']) }}" 
               class="text-green-500 mt-3 inline-block">Read More →</a>
        </div>
    @endforeach
</div>
@endsection
