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

    <!-- Products Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-center mb-8">
                <button class="text-green-600 px-4 py-2">New Arrivals</button>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
                <!-- Product 1 -->
                @foreach ($list as $List)
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="{{ asset('img/images/' . $List->image) }}" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">{{ $List->name }}</h3>
                    <p class="text-gray-600">Rp. {{ $List->price }}</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded" ><a href="{{ route('detail', $List->id) }}" >Detail</a></button>
                    
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
