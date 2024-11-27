<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    <link rel="icon" href="{{ asset('images/i.png') }}" type="image/png">


    </head>

<body class="bg-black roboto-medium">


    <header class="bg-gradient-to-b from-gray-900 to-black shadow-md text-white px-2 lg:px-4 fixed top-0 w-full z-10 ">
        <div class="container mx-auto flex items-center justify-between p-2 lg:p-4">
            <!-- Logo Section -->
            <div class="flex items-center space-x-3">
               <a href="{{ route('home') }}"><img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo" class="w-12 h-12 rounded-full"></a> 
                <a href="{{ route('home') }}" class=" text-md lg:text-xl font-bold">Smart Studio</a>
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
            <nav id="menu" class="hidden md:flex md:space-x-4 font-semibold text-sm lg:text-lg">
                <a href="{{ route('home') }}" class="text-yellow-500">Home</a>
                <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
                <a href="{{ route('gallery') }}" class="hover:text-yellow-500">Gallery</a>
                <a href="{{ route('portfolio') }}" class="hover:text-yellow-500">Portfolio</a>
                <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
                <a href="{{ route('budget.index') }}" class="hover:text-yellow-500">Budget</a>
                
            </nav>
        
            <!-- Social Icons -->
            <div class="hidden md:flex space-x-2">
                {{-- <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
                    <i class="bi bi-facebook text-xl"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-pink-500">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                    <i class="bi bi-twitter text-xl"></i>
                </a> --}}
                {{-- <a href="{{ route('category.view') }}"
                class=" px-2 py-2  w-full text-center text-yellow-400 border border-yellow-400  rounded hover:bg-yellow-400 hover:text-white transition">
                Book Now
                </a> --}}
                <a href="{{ route('category.view') }}">
                    <button type="submit"
                            class="w-full px-2 py-2 text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                            Book Now
                    </button>
                </a>

               
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden flex flex-col space-y-4 p-4 text-md font-semibold">
            <a href="{{ route('home') }}" class="text-yellow-500 hover:text-white"> <i class="bi bi-house-fill"></i> Home</a>
            <a href="{{ route('portfolio') }}" class="text-yellow-500 hover:text-white"> <i class="bi bi-journal-medical"></i> Portfolio</a>
            <a href="{{ route('budget.index') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-cash-coin"></i> Budget</a>
            <a href="{{ route('gallery') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-images"></i> Gallery</a>
            <a href="{{ route('video') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-fast-forward-btn"></i> Video</a>
            <a href="{{ route('contact') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-phone-vibrate-fill"></i> Contact</a>
            <a href="{{ route('about') }}" class="text-yellow-500 hover:text-white"> <i class="bi bi-person-circle"></i> About</a>

            
            <div class="flex flex-col space-y-4  mt-4">
                

                <a href="{{ route('category.view') }}"
                class=" w-48 py-2  block text-center text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                Book Now
                </a>

               
                {{-- <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
                    <i class="bi bi-facebook text-xl"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-pink-500">
                    <i class="bi bi-instagram text-xl"></i>
                </a>
                <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                    <i class="bi bi-twitter text-xl"></i>
                </a> --}}
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
