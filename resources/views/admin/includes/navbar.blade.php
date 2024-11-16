{{-- <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4">
    <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
    </div>
    <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
        <div class="relative w-full">
            <input type="text" placeholder="Search..."
                class="w-full pl-4 pr-10 py-2 bg-white rounded-full focus:outline-none border border-yellow-400">
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <button class="p-2 rounded-full text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="absolute right-4 top-4 w-full md:w-auto h-auto flex items-center gap-2">

        <div class="w-full md:w-24 h-10 rounded-lg flex items-center justify-center text-center">
            <form action="{{ route('logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit"
                    class="text-base font-semibold text-yellow-500 border border-yellow-400 px-2 py-2 rounded-lg flex items-center justify-center hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out">
                    <i class="bi bi-box-arrow-right mr-2"></i>
                    Logout
                </button>
            </form>

        </div>

        <!-- Profile Image -->
        <div class="w-12 h-12 rounded-full flex items-center justify-center">
            <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full"
                alt="Profile Picture" />
        </div>
    </div>

</div> --}}


{{-- resources/views/components/navbar.blade.php --}}
<div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4 relative">
    <div class="absolute left-4 md:left-6 top-4 md:top-4 md:hidden">
        <button id="menu-button" class="p-2 rounded-full text-yellow-400 hover:text-yellow-500 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
    <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0"></div>
    <div class="w-full md:w-1/3 h-auto p-2 flex items-center justify-center">
        <div class="relative w-full">
            <input type="text" placeholder="Search..." class="w-full pl-4 pr-10 py-2 bg-white rounded-full focus:outline-none border border-yellow-400">
            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                <button class="p-2 rounded-full text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <div class="absolute right-4 top-4 w-full md:w-auto h-auto flex items-center gap-2">
        <div class="w-full md:w-24 h-10 rounded-lg flex items-center justify-center text-center">
            <form action="{{ route('logout') }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="text-base font-semibold text-yellow-500 border border-yellow-400 px-2 py-2 rounded-lg flex items-center justify-center hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out">
                    <i class="bi bi-box-arrow-right mr-2"></i>
                    Logout
                </button>
            </form>
        </div>
        <!-- Profile Image -->
        <div class="w-12 h-12 rounded-full flex items-center justify-center">
            <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full" alt="Profile Picture"/>
        </div>
    </div>
</div>

<script>
    document.getElementById('menu-button').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('hidden');
    });
</script>
