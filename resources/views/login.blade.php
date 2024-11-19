<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Image Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

<body class="bg-black roboto-medium">


    <header class="bg-gray-900 text-white py-3 px-4 fixed top-0 w-full z-10 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo"
                    class="w-12 h-12 rounded-full">
                    <a href="{{ route('home') }}"  class="text-xl font-bold">Smart studio</a>
            </div>

            <nav class="hidden md:flex space-x-6">
                <a href="{{route('home')}}" class="text-yellow-500">Home</a>
                <a href="{{route('about')}}" class="hover:text-yellow-500">About</a>
                <a href="{{route('gallery')}}" class="hover:text-yellow-500">Gallery</a>
                <a href="{{route('portfolio')}}" class="hover:text-yellow-500">Portfolio</a>
                <a href="{{route('contact')}}" class="hover:text-yellow-500">Contact</a>
            </nav>

            <div class="flex space-x-4">
                <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
                    <i class="bi bi-facebook text-xl"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-pink-500">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                    <i class="bi bi-twitter text-xl"></i>
                </a>
            </div>
        </div>
    </header>

    <div class="flex items-center justify-center min-h-screen pt-20 px-4">
        <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Login to your account</h2>

            <form action="/login" method="POST" class="space-y-5">
                @csrf 
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" 
                           class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none" 
                           required>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" 
                           class="w-full px-4 py-2 mt-1 border rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none" 
                           required>
                </div>

                @if ($errors->any())
                    <div class="text-red-500 text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="flex items-center justify-between">
                    <label class="flex items-center space-x-2">
                        <input type="checkbox" class="h-4 w-4 text-yellow-500 border-gray-300 rounded focus:ring-yellow-500">
                        <span class="text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-yellow-500 hover:underline">Forgot password?</a>
                </div>

                <button type="submit" 
                        class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded-md transition">
                    Login
                </button>

                <p class="text-center text-sm text-gray-600">
                    Don't have an account? 
                    <a href="/register" class="text-yellow-500 hover:underline">Sign up</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>
