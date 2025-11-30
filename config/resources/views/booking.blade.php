@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tour Booking Form</h1>

@if(request('success'))
    <div class="bg-green-200 p-3 mb-4 border border-green-500 text-green-700 rounded">
        Booking sent successfully!
    </div>
@endif

<form method="GET" action="/booking" class="bg-white p-6 rounded-lg shadow w-full max-w-lg mx-auto">

    <input type="hidden" name="success" value="1">

    <div class="mb-4">
        <label class="block mb-2 font-semibold">Name</label>
        <input type="text" class="w-full border rounded p-2" name="name" required>
    </div>

    <div class="mb-4">
        <label class="block mb-2 font-semibold">Select Destination</label>
        <select class="w-full border rounded p-2" name="destination" required>
            <option>Pantai Kuta</option>
            <option>Gunung Bromo</option>
            <option>Pulau Komodo</option>
            <option>Raja Ampat</option>
            <option>Gunung Rinjani</option>
            <option>Pulau Padar</option>
        </select>
    </div>

    <div class="mb-4">
        <label class="block mb-2 font-semibold">Date of Visit</label>
        <input type="date" class="w-full border rounded p-2" name="date" required>
    </div>

    <div class="mb-4">
        <label class="block mb-2 font-semibold">Number of People</label>
        <input type="number" class="w-full border rounded p-2" name="people" required>
    </div>

    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">
        Submit
    </button>
</form>
@endsection
