<aside class="flex-shrink-0 w-full md:w-1/4 bg-black text-white p-6 flex flex-col items-center">
    <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180" alt="Logo"
        class="rounded-full w-24 h-24 object-cover mb-6">

    <nav class="flex-1 w-full text-center space-y-4">
        <div class="flex justify-between items-center w-full">
            <a href="#" class="text-lg text-yellow-400">Home</a>
            <a href="{{ route('login') }}"
                class="bg-yellow-500 text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-yellow-600 transition duration-300">
                Login
            </a>
        </div>



        <div class="relative">

            <div class="absolute top-0 left-0 h-full w-1 bg-yellow-200"></div>


            <ul class="pl-6 space-y-4 text-left">
                <li class="flex items-center">
                    <a href="{{ route('gallery') }}" class="text-lg text-yellow-400 hover:text-gray-300">Gallery
                        Albums</a>
                </li>
                <li class="flex items-center">
                    <a href="" class="text-xl hover:text-gray-300">Background Images</a>
                </li>
                <li class="flex items-center">
                    <a href="{{ route('video') }}" class="text-lg hover:text-gray-300">Background Video</a>
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
                <a href="{{ route('budget.index') }}" class="text-white text-lg hover:text-yellow-500">Budget
                    For Your Event</a>
                <i class="bi bi-caret-left-fill text-white text-2xl"></i>
            </div>
            <div class="flex justify-between items-center w-full">
                <a href="{{ route('category.view') }}"
                    class="text-black text-lg bg-yellow-400 px-3 py-1 rounded">Book Now -></a>
                <i class="bi bi-caret-left-fill text-white text-2xl"></i>
            </div>
        </div>
    </nav>

    <img src="https://tse3.mm.bing.net/th?id=OIP.3q3KkIYCwkoXEXdh3KC3SgHaE8&pid=Api&P=0&h=180"
        alt="Profile Picture" class="rounded-full w-24 h-24 object-cover mt-6">

    <p class="text-center text-lg px-4 mt-4">Welcome To "Smart Studio"</p>

    <div class="flex justify-center space-x-6 mt-4">
        <i class="bi bi-facebook text-2xl text-yellow-500"></i>
        <i class="bi bi-twitter text-2xl text-yellow-500"></i>
        <i class="bi bi-instagram text-2xl text-yellow-500"></i>
    </div>
</aside>