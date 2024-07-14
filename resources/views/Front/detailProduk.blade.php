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

    <div class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-lg mt-6">
        <h1 class="text-3xl font-bold">Coral PIK Seven</h1>
        <p class="text-gray-500 mt-1">Where dreams live begin without worried ipsum.</p>

        <div class="flex items-center mt-2">
            <div class="text-yellow-500 flex items-center">
                <!-- Stars Rating -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927C9.469 1.645 10.531 1.645 10.951 2.927l1.286 3.971a1 1 0 00.95.69h4.18c1.2 0 1.7 1.55.717 2.243l-3.354 2.416a1 1 0 00-.364 1.118l1.286 3.971c.42 1.282-.337 2.334-1.37 1.79l-3.354-2.416a1 1 0 00-1.175 0l-3.354 2.416c-1.033.544-1.79-.508-1.37-1.79l1.286-3.971a1 1 0 00-.364-1.118L2.816 9.831C1.833 9.137 2.333 7.586 3.533 7.586h4.18a1 1 0 00.95-.69l1.286-3.971z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927C9.469 1.645 10.531 1.645 10.951 2.927l1.286 3.971a1 1 0 00.95.69h4.18c1.2 0 1.7 1.55.717 2.243l-3.354 2.416a1 1 0 00-.364 1.118l1.286 3.971c.42 1.282-.337 2.334-1.37 1.79l-3.354-2.416a1 1 0 00-1.175 0l-3.354 2.416c-1.033.544-1.79-.508-1.37-1.79l1.286-3.971a1 1 0 00-.364-1.118L2.816 9.831C1.833 9.137 2.333 7.586 3.533 7.586h4.18a1 1 0 00.95-.69l1.286-3.971z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927C9.469 1.645 10.531 1.645 10.951 2.927l1.286 3.971a1 1 0 00.95.69h4.18c1.2 0 1.7 1.55.717 2.243l-3.354 2.416a1 1 0 00-.364 1.118l1.286 3.971c.42 1.282-.337 2.334-1.37 1.79l-3.354-2.416a1 1 0 00-1.175 0l-3.354 2.416c-1.033.544-1.79-.508-1.37-1.79l1.286-3.971a1 1 0 00-.364-1.118L2.816 9.831C1.833 9.137 2.333 7.586 3.533 7.586h4.18a1 1 0 00.95-.69l1.286-3.971z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927C9.469 1.645 10.531 1.645 10.951 2.927l1.286 3.971a1 1 0 00.95.69h4.18c1.2 0 1.7 1.55.717 2.243l-3.354 2.416a1 1 0 00-.364 1.118l1.286 3.971c.42 1.282-.337 2.334-1.37 1.79l-3.354-2.416a1 1 0 00-1.175 0l-3.354 2.416c-1.033.544-1.79-.508-1.37-1.79l1.286-3.971a1 1 0 00-.364-1.118L2.816 9.831C1.833 9.137 2.333 7.586 3.533 7.586h4.18a1 1 0 00.95-.69l1.286-3.971z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927C9.469 1.645 10.531 1.645 10.951 2.927l1.286 3.971a1 1 0 00.95.69h4.18c1.2 0 1.7 1.55.717 2.243l-3.354 2.416a1 1 0 00-.364 1.118l1.286 3.971c.42 1.282-.337 2.334-1.37 1.79l-3.354-2.416a1 1 0 00-1.175 0l-3.354 2.416c-1.033.544-1.79-.508-1.37-1.79l1.286-3.971a1 1 0 00-.364-1.118L2.816 9.831C1.833 9.137 2.333 7.586 3.533 7.586h4.18a1 1 0 00.95-.69l1.286-3.971z"/></svg>
            </div>
            <p class="ml-2 text-gray-700 font-semibold">(28,309)</p>
        </div>

        <div class="grid grid-cols-2 gap-4 mt-6">
            <img src="https://via.placeholder.com/300x200" alt="Image 1" class="w-full h-auto rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Image 2" class="w-full h-auto rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Image 3" class="w-full h-auto rounded-lg shadow-lg">
            <img src="https://via.placeholder.com/300x200" alt="Image 4" class="w-full h-auto rounded-lg shadow-lg">
        </div>

        <div class="mt-6">
            <h2 class="text-2xl font-bold">About Listing</h2>
            <p class="mt-2 text-gray-700">We are in a building of from the 1800’s, in a quiet street but in the heart of historic Turin. In it, the biggest square in Europe “Piazza Vittorio” where there’s the night life. Convenient to all services, in the district you can find every day a local market with fresh produce, but there also different supermarket.</p>
        </div>

        <div class="flex items-center mt-4 space-x-4">
            <div class="flex items-center">
                <div class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path d="M8.293 16.293a1 1 0 011.414 0l6-6a1 1 0 00-1.414-1.414L9 13.586l-2.293-2.293a1 1 0 00-1.414 1.414l3 3z"/></svg>
                </div>
                <p class="ml-2 text-gray-700">Wifi 24 hours</p>
            </div>
            <div class="flex items-center">
                <div class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path d="M8.293 16.293a1 1 0 011.414 0l6-6a1 1 0 00-1.414-1.414L9 13.586l-2.293-2.293a1 1 0 00-1.414 1.414l3 3z"/></svg>
                </div>
                <p class="ml-2 text-gray-700">Access Card 3 cards</p>
            </div>
            <div class="flex items-center">
                <div class="text-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path d="M2 5a2 2 0 012-2h12a2 2 0 012 2v12a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm3 2a1 1 0 100 2h6a1 1 0 100-2H5zm0 4a1 1 0 100 2h4a1 1 0 100-2H5z"/></svg>
                </div>
                <p class="ml-2 text-gray-700">Receptionist 24 hours</p>
            </div>
            <div class="flex items-center">
                <div class="text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M6.293 10.293a1 1 0 011.414 0L10 12.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </div>
                <p class="ml-2 text-gray-700">City Park 9 mins</p>
            </div>
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
