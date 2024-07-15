<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 font-sans antialiased text-gray-900">
     <!-- Header -->
     @include('Component.navbar')
    
    <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">
        <h1 class="text-3xl font-bold">{{ $produk->name }}</h1>
        <p class="text-gray-500 mt-1">Where dreams live begin without worried</p>

        <div class="grid grid-cols-2 gap-4 mt-6">
            <img src="{{ asset('img/images/' . $produk->image) }}" alt="Image 1" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <div class="mt-6">
            <h2 class="text-2xl font-bold">Harga</h2>
            <h4 class="text-2xl font-bold">Rp. {{ $produk->price }}</h4>
            <p class="mt-2 text-gray-700">We are in a building of from the 1800’s, in a quiet street but in the heart of historic Turin. In it, the biggest square in Europe “Piazza Vittorio” where there’s the night life. Convenient to all services, in the district you can find every day a local market with fresh produce, but there also different supermarket.</p>
        </div>  
    </div>

    <!-- Footer -->
    @include('Component.footer')

</body>
</html>
