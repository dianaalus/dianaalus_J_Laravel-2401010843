<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tourism Website</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

<nav class="bg-green-600 text-white p-4">
    <div class="container mx-auto flex justify-between">
        <a href="{{ route('home') }}" class="font-bold text-lg">Indonesia Tourism Website</a>
        <div>
            <a href="{{ route('home') }}" class="mx-2 hover:underline">Home</a>
            <a href="{{ route('destinations') }}" class="mx-2 hover:underline">Destinations</a>
            <a href="{{ route('booking') }}" class="mx-2 hover:underline">Book Now</a>
            <a href="{{ route('recommendations') }}" class="mx-2 hover:underline">Recommendations</a>
        </div>
    </div>
</nav>

<main class="container mx-auto p-6">
    @yield('content')
</main>

<footer class="bg-green-600 text-white text-center p-3 mt-10">
    &copy; {{ date('Y') }} Indonesia Tourism Website
</footer>

</body>
</html>