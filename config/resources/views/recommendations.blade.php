@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Recommended Tourist Attractions</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    
    <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-xl transition text-sm">
        <img src="{{ asset('images/pulau_komodo.jpg') }}" 
             alt="Pulau Komodo" 
             class="rounded-lg mb-3 w-full h-40 object-cover">

        <h2 class="text-lg font-bold">Pulau Komodo</h2>
        <p class="text-green-600 mb-2">Wildlife & Adventure</p>
        <p class="text-gray-700">{{ Str::limit('Pulau Komodo merupakan habitat asli komodo, hewan purba yang hanya ada di Indonesia. Pulau ini menawarkan pemandangan bukit yang eksotis, laut biru jernih, dan pengalaman berpetualang bersama satwa langka.', 100) }}</p>

        <a href="{{ url('/destination/3') }}" 
           class="text-green-600 font-semibold mt-3 inline-block hover:text-green-800">
           Discover More →
        </a>
    </div>

    <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-xl transition text-sm">
        <img src="{{ asset('images/rajaampat.jpg') }}" 
             alt="Raja Ampat" 
             class="rounded-lg mb-3 w-full h-40 object-cover">

        <h2 class="text-lg font-bold">Raja Ampat</h2>
        <p class="text-green-600 mb-2">Bahari</p>
        <p class="text-gray-700">{{ Str::limit('Raja Ampat adalah surga bahari Indonesia yang terkenal dengan keindahan bawah lautnya. Tempat ini menjadi salah satu spot diving terbaik di dunia dengan terumbu karang dan biota laut yang sangat kaya.', 100) }}</p>

        <a href="{{ url('/destination/4') }}" 
           class="text-green-600 font-semibold mt-3 inline-block hover:text-green-800">
           Discover More →
        </a>
    </div>

    <div class="bg-white p-4 rounded-xl shadow-md hover:shadow-xl transition text-sm">
        <img src="{{ asset('images/nusa_penida.jpg') }}" 
             alt="Nusa Penida" 
             class="rounded-lg mb-3 w-full h-40 object-cover">

        <h2 class="text-lg font-bold">Nusa Penida</h2>
        <p class="text-green-600 mb-2">Island & Beach</p>
        <p class="text-gray-700">{{ Str::limit('Nusa Penida dikenal dengan tebing-tebing dramatis, air laut biru jernih, dan spot ikonik seperti Kelingking Beach yang menjadi favorit para wisatawan.', 100) }}</p>

        <a href="{{ url('/destination/1') }}" 
           class="text-green-600 font-semibold mt-3 inline-block hover:text-green-800">
           Discover More →
        </a>
    </div>

</div>
@endsection
