<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Layout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-gray-900 via-gray-800 to-black text-gray-100">
    <div class="flex flex-col md:flex-row w-full">
        <!-- Sidebar -->
        <aside class="flex-shrink-0 w-full md:w-1/4 bg-gradient-to-b from-gray-800 to-black text-white p-6 flex flex-col items-center">
            <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180" alt="Logo"
                class="rounded-full w-24 h-24 object-cover mb-6 border-4 border-yellow-500">
            <nav class="flex-1 w-full text-center space-y-4">
                <div class="flex justify-between items-center w-full">
                    <a href="#" class="text-lg text-yellow-400">Home</a>
                    <i class="bi bi-caret-left-fill text-yellow-400 text-2xl"></i>
                </div>
                <div class="relative">
                    <div class="absolute top-0 left-0 h-full w-1 bg-yellow-200"></div>
                    <ul class="pl-6 space-y-4 text-left">
                        <li><a href="#" class="text-lg text-yellow-400 hover:text-gray-300">Gallery Albums</a></li>
                        <li><a href="#" class="text-xl hover:text-gray-300">Background Images</a></li>
                        <li><a href="#" class="text-lg hover:text-gray-300">Background Video</a></li>
                        <li><a href="#" class="text-lg hover:text-gray-300">Portfolio</a></li>
                        <li><a href="#" class="text-lg hover:text-gray-300">Full Screen Slider</a></li>
                    </ul>
                </div>
                <hr class="border-t border-white mt-6 w-full">
                <div class="space-y-2 mt-4">
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('about') }}" class="text-white text-lg hover:text-yellow-500">About</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('service') }}" class="text-white text-lg hover:text-yellow-500">Services</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('contact') }}" class="text-white text-lg hover:text-yellow-500">Contact</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('portfolio') }}" class="text-white text-lg hover:text-yellow-500">Portfolio</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('category.view') }}" class="text-white text-lg bg-yellow-400 px-3 py-1 rounded">Book Now →</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                </div>
            </nav>
            <img src="https://tse3.mm.bing.net/th?id=OIP.3q3KkIYCwkoXEXdh3KC3SgHaE8&pid=Api&P=0&h=180" alt="Profile Picture"
                class="rounded-full w-24 h-24 object-cover mt-6 border-4 border-yellow-500">
            <p class="text-center text-lg px-4 mt-4">Welcome To "Smart Studio"</p>
            <div class="flex justify-center space-x-6 mt-4">
                <i class="bi bi-facebook text-2xl text-yellow-500"></i>
                <i class="bi bi-twitter text-2xl text-yellow-500"></i>
                <i class="bi bi-instagram text-2xl text-yellow-500"></i>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="w-full flex p-6">
            <div class="bg-gradient-to-r from-gray-700 to-gray-900 h-auto p-6 rounded-lg shadow-lg w-full max-w-5xl">
                <div class="flex justify-between items-center bg-gradient-to-r from-yellow-100 to-yellow-500 text-white p-4 rounded-lg shadow-lg">
                    <h2 class="text-2xl font-semibold text-black">Categories</h2>
                </div>
               
                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4">
                    @foreach ($bookcat as $cat)
                    <a href="{{ route('category.name', $cat->cat_name) }}" class="bg-gradient-to-b from-gray-800 to-black shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('images/' . $cat->cat_image) }}" alt="Card Image" class="w-full h-32 object-cover rounded-md mb-4">
                        <h3 class="text-xl text-center text-white font-semibold mb-2 capitalize">{{ $cat->cat_name }}</h3>
                        <button class="bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-lg mt-4 w-full hover:bg-yellow-600 transition duration-300">View More</button>
                    </a>
                    @endforeach
                </div>

                <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4">
                   
                    <a href="" class="bg-gradient-to-b from-gray-400 to-black shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
                        <img src="https://th.bing.com/th/id/OIP._kvTiLiyb52cOIBiLvstDQHaE9?w=208&h=139&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Card Image" class="w-full h-32 object-cover rounded-md mb-4">
                        <h3 class="text-xl text-center text-white font-semibold mb-2 capitalize">Bride Image</h3>
                        <button class="bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-lg mt-4 w-full hover:bg-yellow-600 transition duration-300">View More</button>
                    </a>
                  
                </div>
            </div>
        </div>
    </div>
</body>

</html>
