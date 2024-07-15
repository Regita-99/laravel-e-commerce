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

    <!-- Hero Section -->
    <section class="bg-blue-100 py-16">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center justify-center text-center md:text-left md:space-x-8">
            <div class="max-w-lg">
                <h1 class="text-4xl font-bold mb-4">Shop Online Exclusives</h1>
                <p class="text-xl mb-6">Body <span class="text-green-600">HandBags</span></p>
                <button class="px-6 py-2 bg-black text-white rounded">Shop Now</button>
            </div>
            <div class="relative mt-8 md:mt-0 max-w-lg mx-auto md:mx-0">
                <img src="img/abstrak.svg" alt="Background" class="absolute inset-0 w-full h-full object-cover opacity-50 z-0">
                <img src="img/tasrabbit.png" alt="Handbag" class="relative z-10 max-w-full mx-auto md:mx-0">
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-center mb-8">
                <button class="text-green-600 px-4 py-2">New Arrivals</button>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
                @foreach ($produk as $item)
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="{{ asset('img/images/' . $item->image) }}" alt="Product 1" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">{{ $item->name }}</h3>
                    <p class="text-gray-600">Rp. {{ $item->price }}</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded" ><a href="{{ route('detail', $item->id) }}" >Detail</a></button>

                </div>
                @endforeach
                
                <!-- More products... -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('Component.footer')

    <!-- Tailwind CSS script -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
