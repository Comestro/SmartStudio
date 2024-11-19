<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body class=" bg-black roboto-medium">


    <header class="bg-gray-900 text-white py-3 px-4 fixed top-0 w-full z-10 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo"
                    class="w-12 h-12 rounded-full">
                    <a href="{{ route('home') }}"  class="text-xl font-bold">Smart studio</a>
            </div>

            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('home') }}" class="text-yellow-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
                <a href="{{ route('gallery') }}" class="hover:text-yellow-500">Gallery</a>
                <a href="{{ route('portfolio') }}" class="hover:text-yellow-500">Portfolio</a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
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

    @section('content')

    @show

    @include('public.includes.footer')
</body>

</html>
