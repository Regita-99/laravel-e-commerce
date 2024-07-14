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
            <a href="#" class="text-2xl font-bold">Famita</a>
            <nav class="hidden md:flex space-x-4">
                <a href="#" class="text-gray-700 hover:text-gray-900">Home</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Shop</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Elements</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Page</a>
                <a href="#" class="text-gray-700 hover:text-gray-900">Blog</a>
            </nav>
            <div class="space-x-4">
                <button class="text-gray-700 hover:text-gray-900">Search</button>
                <button class="text-gray-700 hover:text-gray-900">Cart</button>
                <button class="text-gray-700 hover:text-gray-900">Profile</button>
            </div>
        </div>
    </header>

    <!-- Products Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="flex justify-center mb-8">
                <button class="text-green-600 px-4 py-2">New Arrivals</button>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-8">
                <!-- Product 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas1.png" alt="Product 1" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Leather Shopper Bag</h3>
                    <p class="text-gray-600">$39.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas2.png" alt="Product 2" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Pocket Front Shirt</h3>
                    <p class="text-gray-600">$45.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas1.png" alt="Product 1" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Leather Shopper Bag</h3>
                    <p class="text-gray-600">$39.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas2.png" alt="Product 2" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Pocket Front Shirt</h3>
                    <p class="text-gray-600">$45.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas1.png" alt="Product 1" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Leather Shopper Bag</h3>
                    <p class="text-gray-600">$39.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas2.png" alt="Product 2" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Pocket Front Shirt</h3>
                    <p class="text-gray-600">$45.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 1 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas1.png" alt="Product 1" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Leather Shopper Bag</h3>
                    <p class="text-gray-600">$39.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- Product 2 -->
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="img/tas2.png" alt="Product 2" class="w-full h-48 object-cover mb-4">
                    <h3 class="font-semibold">Pocket Front Shirt</h3>
                    <p class="text-gray-600">$45.00</p>
                    <button class="mt-2 px-4 py-2 bg-green-600 text-white rounded">Add to Cart</button>
                </div>
                <!-- More products... -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 Famita. All rights reserved.</p>
            <div class="mt-4 space-x-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms of Service</a>
                <a href="#" class="hover:underline">Contact Us</a>
            </div>
        </div>
    </footer>

    <!-- Tailwind CSS script -->
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
