<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="max-w-4xl w-full flex flex-col lg:flex-row border-2 border-inherit bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Login Form -->
        <div class="w-full lg:w-1/2 p-8">
            <div class="lg:p-12">
                <h1 class="text-3xl font-bold mb-4">Welcome back!</h1>
                <p class="text-gray-600 mb-8">Simplify your workflow and boost your productivity with Tuga's App. Get started for free.</p>
        
                @include('Auth.massage')
                
                <form action="{{ url('/login') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</label>
                        <input type="text" id="email" name="email" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">Password</label>
                        <input type="password" id="password" name="password" class="shadow appearance-none border rounded-full w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>
                    <div class="mb-4 text-right">
                        <a href="#" class="text-sm text-gray-600 hover:text-gray-900">Forgot Password?</a>
                    </div>
                    <button type="submit" class="bg-black text-white py-2 px-4 rounded-full w-full hover:bg-gray-800">Login</button>
                </form>
                <div class="mt-8 text-center">
                    <span class="text-gray-600">Not a member? <a href="/register" class="text-blue-500 hover:underline">Register now</a></span>
                </div>
            </div>
        </div>
        <!-- Illustration -->
        <div class="hidden lg:block lg:w-1/2 p-8 bg-gray-100 flex items-center justify-center">
            <div class="text-center">
                <img src="img/icon_shopping.png" alt="Illustration" class="max-w-xs mx-auto mb-4">
                <h2 class="text-xl font-semibold">Make your work easier and organized with Tuga's App</h2>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
