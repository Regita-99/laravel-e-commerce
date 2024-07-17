<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="max-w-4xl w-full flex flex-col lg:flex-row border-2 border-inherit bg-white shadow-lg rounded-lg overflow-hidden h-full lg:h-auto">
        <!-- Registration Form -->
        <div class="w-full lg:w-1/2 p-8">
            <div class="lg:p-12">
                <h1 class="text-2xl lg:text-3xl font-bold mb-4">Join Us!</h1>
                <p class="text-gray-600 mb-8">Create an account to start using Tuga's App and boost your productivity.</p>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input type="email" id="email" name="email" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="username">Username</label>
                        <input type="text" id="username" name="username" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input type="password" id="password" name="password" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="confirm-password">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm_password" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <button type="submit" class="bg-black text-white py-2 px-4 rounded-full w-full hover:bg-gray-800">Register</button>
                </form>
                <div class="mt-8 text-center">
                    <span class="text-gray-600">Already have an account? <a href="/login" class="text-blue-500 hover:underline">Login now</a></span>
                </div>
            </div>
        </div>
        <!-- Illustration -->
        <div class="hidden lg:flex lg:w-1/2 p-8 bg-gray-100 items-center justify-center">
            <div class="text-center">
                <img src="img/icon_shopping.png" alt="Illustration" class="max-w-xs mx-auto mb-4">
                <h2 class="text-xl font-semibold">Make your work easier and organized with Tuga's App</h2>
            </div>
        </div>
    </div>
</body>
</html>
