<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home Page')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class=" bg-black roboto-medium">


    <header class="bg-gray-900 text-white  px-4 fixed top-0 w-full z-10 shadow-md">
        <div class="container mx-auto flex items-center justify-between p-4">
            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
               <a href="{{ route('home') }}"><img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo" class="w-12 h-12 rounded-full"></a> 
                <a href="{{ route('home') }}" class="text-xl font-bold">Smart Studio</a>
            </div>
        
            <!-- Hamburger Menu Button (Visible on small screens) -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-yellow-500 focus:outline-none">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        
            <!-- Navigation Links -->
            <nav id="menu" class="hidden md:flex md:space-x-6">
                <a href="{{ route('home') }}" class="text-yellow-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
                <a href="{{ route('gallery') }}" class="hover:text-yellow-500">Gallery</a>
                <a href="{{ route('portfolio') }}" class="hover:text-yellow-500">Portfolio</a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
            </nav>
        
            <!-- Social Icons -->
            <div class="hidden md:flex space-x-4">
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
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden flex flex-col space-y-4 p-4">
            <a href="{{ route('home') }}" class="hover:text-yellow-500">Home</a>
            <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
            <a href="{{ route('gallery') }}" class="hover:text-yellow-500">Gallery</a>
            <a href="{{ route('portfolio') }}" class="hover:text-yellow-500">Portfolio</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
            <div class="flex space-x-4 mt-4">
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
        
        <!-- Script to Toggle Menu -->
        <script>
            const menuToggle = document.getElementById('menu-toggle');
            const menu = document.getElementById('menu');
            const mobileMenu = document.getElementById('mobile-menu');
        
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        </script>
        
    </header>

    @section('content')

    @show

    @include('public.includes.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>