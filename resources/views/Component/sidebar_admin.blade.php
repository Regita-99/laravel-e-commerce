<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-blue-900 text-white w-64 space-y-6 py-7 px-2 flex flex-col">
        <!-- Logo -->
        <div class="text-center mb-4">
            <h1 class="text-3xl font-bold">Admin</h1>
        </div>
        <!-- Navigation -->
        <nav class="flex flex-col space-y-2">
            <a href="#" class="text-lg font-semibold hover:bg-blue-800 p-2 rounded">Produk</a>
        </nav>
        <nav class="flex flex-col space-y-2">
            <a href="{{ url('logout') }}" class="text-lg font-semibold hover:bg-blue-800 p-2 rounded">Logout</a>
        </nav>
    </div>
</body>
</html>