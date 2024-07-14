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
     <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold">Famita</a>
            <nav class="hidden md:flex space-x-4">
                <a href="/" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="/DaftarProduk" class="text-gray-700 hover:text-gray-900">Shop</a>
            </nav>
        </div>
    </header>
    
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
    <footer class="bg-gray-800 text-white py-8 mt-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Famita. All rights reserved.</p>
            <div class="mt-4 space-x-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms of Service</a>
                <a href="#" class="hover:underline">Contact Us</a>
            </div>
        </div>
    </footer>
</body>
</html>
