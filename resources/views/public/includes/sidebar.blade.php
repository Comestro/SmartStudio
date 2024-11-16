<div class="relative h-[120] ">

    <!-- Toggle Button -->
    <button id="menuToggle" class="absolute top-4 left-4 border border-yellow-400 text-yellow-400 bg-transparent hover:bg-yellow-400 hover:text-white transition p-2 rounded z-50">
        <i class="bi bi-list text-2xl"></i>
    </button>

    <!-- Sidebar -->
    <aside id="sidebar"
        class="absolute top-0 left-0 h-full w-[400px] bg-black text-white p-6 flex flex-col items-center transform -translate-x-full transition-transform duration-300 z-40">
        <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180"
            alt="Logo"
            class="rounded-full w-24 h-24 object-cover mb-6">
        <div class="flex justify-between items-center w-full">
            <a href="#" class="text-lg text-yellow-400">Home</a>
            @if(Auth::check())
            <span class="text-yellow-400 font-semibold"> {{ Auth::user()->name }}</span>
            @endif
        </div>
        <nav class="flex-1 w-full text-center space-y-4">
            <ul class="pl-6 space-y-4 text-left mt-4">
                <li><a href="{{ route('gallery') }}" class="text-lg text-yellow-400 hover:text-gray-300">Gallery Albums</a></li>
                <li><a href="#" class="text-lg hover:text-gray-300">Background Images</a></li>
                <li><a href="{{ route('video') }}" class="text-lg hover:text-gray-300">Background Video</a></li>
                <li><a href="{{ route('portfolio') }}" class="text-lg hover:text-gray-300">Portfolio</a></li>
                <li><a href="#" class="text-lg hover:text-gray-300">Full Screen Slider</a></li>
            </ul>
            <hr class="border-t border-white mt-6 w-full">

          @auth
          <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto mt-4 md:mt-0">
                @csrf
                <button type="submit"
                    class="w-full md:w-auto px-4 py-2 font-semibold rounded border border-yellow-400 text-yellow-400 bg-transparent hover:bg-yellow-400 hover:text-white transition">
                    Logout
                </button>
            </form>
          @endauth

          @guest
          <form method="get" action="{{ route('login') }}" class="w-full md:w-auto mt-4 md:mt-0">
                @csrf
                <button type="submit"
                    class="w-full md:w-auto px-4 py-2 font-semibold rounded border border-yellow-400 text-yellow-400 bg-transparent hover:bg-yellow-400 hover:text-white transition">
                    login
                </button>
            </form>
          @endguest
        
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
                        class="text-black text-lg border border-yellow-400 text-yellow-400 bg-transparent bg-transparent px-3 py-1 rounded hover:bg-yellow-400 hover:text-white transition duration-300">
                        Book Now ->
                    </a>
                    <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                </div>


            </div>

            <div class="flex justify-center items-center mt-6">
                <img src="https://tse3.mm.bing.net/th?id=OIP.3q3KkIYCwkoXEXdh3KC3SgHaE8&pid=Api&P=0&h=180"
                    alt="Profile Picture" class="rounded-full w-24 h-24 object-cover">
            </div>

            <p class="text-center text-lg px-4 mt-4">Welcome To "Smart Studio"</p>

            <div class="flex justify-center space-x-6 mt-4">
                <i class="bi bi-facebook text-2xl text-yellow-500"></i>
                <i class="bi bi-twitter text-2xl text-yellow-500"></i>
                <i class="bi bi-instagram text-2xl text-yellow-500"></i>
            </div>
        </nav>
    </aside>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full'); // Show/hide sidebar
        });
    });
</script>