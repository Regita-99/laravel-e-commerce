<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="flex justify-between bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Login Form -->
        <div class="max-w-lg p-8">
            <div class="p-12">
                <h1 class="text-3xl font-bold mb-4">Welcome back!</h1>
                <p class="text-gray-600 mb-8">Simplify your workflow and boost your productivity with Tuga's App. Get started for free.</p>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                        <input type="password" id="password" name="password" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4 text-right">
                        <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Forgot Password?</a>
                    </div>
                    <button type="submit" class="bg-black text-white py-2 px-4 rounded w-full hover:bg-gray-800">Login</button>
                </form>
                <div class="flex items-center justify-center mt-4">
                    <span class="text-gray-600">or continue with</span>
                </div>
                <div class="flex justify-center mt-4 space-x-4">
                    <button class="bg-black text-white py-2 px-4 rounded-full hover:bg-gray-800">
                        <i class="fab fa-google"></i> G
                    </button>
                    <button class="bg-black text-white py-2 px-4 rounded-full hover:bg-gray-800">
                        <i class="fab fa-apple"></i> A
                    </button>
                    <button class="bg-black text-white py-2 px-4 rounded-full hover:bg-gray-800">
                        <i class="fab fa-facebook-f"></i> F
                    </button>
                </div>
                <div class="mt-8 text-center">
                    <span class="text-gray-600">Not a member? <a href="#" class="text-blue-500 hover:underline">Register now</a></span>
                </div>
            </div>
        </div>
        <!-- Illustration -->
        <div class="w-1/2 bg-gray-100 flex items-center justify-center">
            <div class="text-center">
                <img src="img/icon_shopping.png" alt="Illustration" class="max-w-xs mx-auto mb-4">
                <h2 class="text-xl font-semibold">Make your work easier and organized with Tuga's App</h2>
                <p class="text-gray-600">Canva Design<br>10 Task</p>
                <button class="bg-green-500 text-white py-2 px-4 rounded mt-4 hover:bg-green-700">Design</button>
            </div>
        </div>
    </div>
</body>
</html>
