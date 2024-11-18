<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">
    <div class="flex w-full">
        <aside class="flex-shrink-0 w-full md:w-1/4 bg-black h-full text-white p-6 flex flex-col items-center">
            <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180" alt="Logo"
                class="rounded-full w-24 h-24 object-cover mb-6">

            <nav class="flex-1 w-full text-center space-y-4">
                <div class="flex justify-between items-center w-full">
                    <a href="#" class="text-lg text-yellow-400">Home</a>
                    <i class="bi bi-caret-left-fill text-yellow-400 text-2xl"></i>
                </div>


                <div class="relative">

                    <div class="absolute top-0 left-0 h-full w-1 bg-yellow-200"></div>


                    <ul class="pl-6 space-y-4 text-left">
                        <li class="flex items-center">
                            <a href="#" class="text-lg text-yellow-400 hover:text-gray-300">Gallery Albums</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-xl hover:text-gray-300">Background Images</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-lg hover:text-gray-300">Background Video</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-lg hover:text-gray-300">Portfolio</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-lg hover:text-gray-300">Full Screen Slider</a>
                        </li>
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
                        <a href="{{ route('portfolio') }}"
                            class="text-white text-lg hover:text-yellow-500">Portfolio</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('category.view') }}"
                            class="text-white text-lg bg-red-600 px-3 py-1 rounded">Book Now -></a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                </div>
            </nav>

            <img src="https://tse3.mm.bing.net/th?id=OIP.3q3KkIYCwkoXEXdh3KC3SgHaE8&pid=Api&P=0&h=180"
                alt="Profile Picture" class="rounded-full w-24 h-24 object-cover mt-6">
                <a href="{{ route('home') }}"><p class="text-center text-lg px-4 mt-4">Welcome To "Smart Studio"</p></a>


            <div class="flex justify-center space-x-6 mt-4">
                <i class="bi bi-facebook text-2xl text-yellow-500"></i>
                <i class="bi bi-twitter text-2xl text-yellow-500"></i>
                <i class="bi bi-instagram text-2xl text-yellow-500"></i>
            </div>
        </aside>

        <div class="flex justify-center items-center flex-1">
            <form action="{{route('category.store',$categorySlug)}}" class="w-full max-w-lg mx-auto p-6 bg-gray-800 h-[500px] rounded-lg shadow-lg" method="post">
                @csrf
                <div class="space-y-4">

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-200">Your Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Enter your name"
                            class="w-full p-3 mt-1  text-slate-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
                        @error('name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>


                    <div>
                        <label for="mobile" class="block text-sm font-medium text-gray-200">Mobile Number</label>
                        <input type="number" id="mobile" name="mobile" value="{{ old('mobile') }}"
                            placeholder="Enter your Mobile Number"
                            class="w-full p-3 mt-1 text-salte-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
                        @error('mobile')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category" class="block text-sm font-medium text-gray-200">Category</label>
                        <input id="category" name="category" value="{{$categorySlug}}"
                            placeholder="Type Of Category"
                            class="w-full p-3 mt-1 text-slate-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ">
                        @error('category')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="date" class="block text-sm font-medium text-gray-200">Date </label>
                        <input id="date" name="date"
                        type="date"
                            placeholder="Enter the Date of Booking"
                            class="w-full p-3 mt-1 text-slate-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ">
                        @error('date')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-2 mt-4 rounded-lg hover:bg-indigo-700 transition duration-200">
                        Book Now
                    </button>
                </div>
            </form>
        </div>

</body>

</html>