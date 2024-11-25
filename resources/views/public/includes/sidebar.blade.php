<div class="relative">

    <button id="menuToggle"
        class="absolute top-4 left-4  border border-yellow-400 text-yellow-400 bg-transparent hover:bg-yellow-400 hover:text-white transition p-2 md:p-1 rounded z-50">
        <i class="bi bi-list text-2xl "></i>
    </button>


    <aside id="sidebar"
        class="absolute top-0 left-0 h-screen w-[300px] sm:w-[350px] bg-black text-white p-6 transform -translate-x-full transition-transform duration-300 z-40 shadow-lg">

        <div class="flex flex-col items-center mb-2">
            <a href="{{route('home')}}"><img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180"
                alt="Logo"
                class="rounded-full w-24 h-24 object-cover mb-4"></a>

        </div>

        <div class="flex justify-between items-center w-full mb-2">
            <a href="{{route('home')}}" class="text-lg text-yellow-400">Home</a>
            @if(Auth::check())
            <span class="text-yellow-400 font-semibold">{{ Auth::user()->name }}</span>
            @endif 
            
        </div>
        

        <nav class="flex-1 space-y-1">
            <ul class="space-y-3">
                <li><a href="{{ route('gallery') }}" class="text-lg text-yellow-400 hover:text-gray-300">Gallery Albums</a></li>
                {{-- <li><a href="#" class="text-lg hover:text-gray-300">Background Images</a></li> --}}
                <li><a href="{{ route('video') }}" class="text-lg hover:text-gray-300">Our Video</a></li>
                <li><a href="{{ route('portfolio') }}" class="text-lg hover:text-gray-300">Portfolio</a></li>
                {{-- <li><a href="#" class="text-lg hover:text-gray-300">Full Screen Slider</a></li> --}}
            </ul>

            <!-- Logout Button -->
           

            <hr class="border-t border-white mt-6">

            <!-- Other Links -->
            <ul class="space-y-3 mt-4">
                <li class="flex justify-between items-center">
                    <a href="{{ route('about') }}" class="text-lg hover:text-yellow-500">About</a>
                    <i class="bi bi-caret-left-fill text-2xl"></i>
                </li>
                <li class="flex justify-between items-center">
                    <a href="{{ route('service') }}" class="text-lg hover:text-yellow-500">Services</a>
                    <i class="bi bi-caret-left-fill text-2xl"></i>
                </li>
                <li class="flex justify-between items-center">
                    <a href="{{ route('contact') }}" class="text-lg hover:text-yellow-500">Contact</a>
                    <i class="bi bi-caret-left-fill text-2xl"></i>
                </li>
                <li class="flex justify-between items-center">
                    <a href="{{ route('portfolio') }}" class="text-lg hover:text-yellow-500">Portfolio</a>
                    <i class="bi bi-caret-left-fill text-2xl"></i>
                </li>
                <li class="flex justify-between items-center">
                    <a href="{{ route('budget.index') }}" class="text-lg hover:text-yellow-500">Budget For Your Event</a>
                    <i class="bi bi-caret-left-fill text-2xl"></i>
                </li>
                </ul>
                <div class="mt-4">
                    <a href="{{ route('category.view') }}"
                        class="block text-center text-yellow-400 border border-yellow-400 px-4 py-2 rounded hover:bg-yellow-400 hover:text-white transition">
                        Book Now
                    </a>
                </div>
               
                <div class="mt-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="w-full px-4 py-2 text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                        Logout
                    </button>
                </form>
                @endauth
                @guest
                <form action="{{ route('login') }}">
                    @csrf
                    <button type="submit"
                        class="w-full px-4 py-2 text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                        Login
                    </button>
                </form>
                @endguest
            </div>
            <div class="flex flex-col items-center mt-6">
            <div class="flex space-x-6 text-yellow-500">
                <i class="bi bi-facebook text-2xl"></i>
                <i class="bi bi-twitter text-2xl"></i>
                <i class="bi bi-instagram text-2xl"></i>
            </div>
        </div>  
           
        </nav>



       
    </aside>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    });
</script> 