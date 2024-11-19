<!-- drawer init and toggle -->


<!-- Mobile component -->
<style>
    .scrollbar-hide::-webkit-scrollbar {
        display: none;
    }


    .scrollbar-hide {
        scrollbar-width: none;
    }
</style>
<div id="drawer-example" class="fixed top-0 left-0 z-40 h-full p-4 overflow-y-auto scrollbar-hide transition-transform -translate-x-full  w-80 bg-black dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-label">

    <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
        <span class="sr-only">Close menu</span>
    </button>

    <div class="w-full h-screen pl-10 mt-2">
        <div class="w-full h-16 flex items-center justify-center">
            <p class="text-2xl text-yellow-400 font-bold">SMART STUDIO</p>
        </div>
        <div class="w-full h-10 mt-6 text-base flex items-center pl-10 text-gray-500 font-semibold">
            <p>Main Menu</p>
        </div>
        <ul>
            <li
                class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 hover:border-r-8 border-yellow-500">
                <i class="bi bi-house-door text-yellow-400 text-xl"></i>
                <a href="{{ route('dashboard') }}" class="text-[#eee] font-medium text-lg">Dashboard</a>
            </li>

            <details class="mt-2">
                <summary
                    class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                    <i class="bi bi-calendar-event text-yellow-400 text-xl"></i>
                    <span class="text-[#eee] font-medium text-lg">Event</span>
                </summary>
                <ul class="pl-8">
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                        <a href="{{ route('category') }}" class="text-yellow-400 font-medium text-md">Add Event/manage
                            list</a>
                    </li>

                </ul>
            </details>

            <details class="mt-2">
                <summary
                    class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                    <i class="bi bi-person-circle text-yellow-400 text-xl"></i>
                    <span class="text-[#eee] font-medium text-lg">Customer</span>
                </summary>
                <ul class="pl-8">
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                        <a href="" class="text-[#eee] font-medium text-md">Add Customer</a>
                    </li>
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                        <a href="{{ route('admin.user.index') }}" class="text-[#eee] font-medium text-md">Manage
                            Customers</a>
                    </li>
                </ul>
            </details>


            <details class="mt-2">
                <summary
                    class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                    <i class="bi bi-person-circle text-yellow-400 text-xl"></i>
                    <span class="text-[#eee] font-medium text-lg">Gallery</span>
                </summary>
                <ul class="pl-8">
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                        <a href="{{ route('gallery.insertGallery') }}" class="text-[#eee] font-medium text-md">Add
                            Gallery</a>
                    </li>
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                        <a href="{{ route('gallery.manageGallery') }}" class="text-[#eee] font-medium text-md">Manage
                            Gallery</a>
                    </li>
                </ul>
            </details>

           
            @php

            $totalContact = App\Models\Contact::where('is_read', 0)->count();

            @endphp
            <li
                class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-person-lines-fill text-yellow-400 text-xl"></i>

                <a href="{{ route('admin.contact.list') }}" class="text-[#eee] font-medium text-lg">Contact List</a>
                <span
                    class="{{$totalContact?'flex items-center justify-center w-8 h-8 text-white bg-green-500 rounded-full':''}}">
                    {{ $totalContact?$totalContact:''}}
                </span>
            </li>

            <details class="mt-2">
                <summary
                    class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                    <i class="bi bi-flag-fill text-yellow-400 text-xl"></i>
                    <span class="text-[#eee] font-medium text-lg">Banner</span>
                </summary>
                <ul class="pl-8">
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">

                        <a href="{{route('banner.create')}}" class="text-[#eee] font-medium text-lg"> Add Banner</a>
                    </li>
                    <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">

                        <a href="{{route('admin.banners.index')}}" class="text-[#eee] font-medium text-lg"> Manage Banner</a>
                    </li>
                </ul>
            </details>
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-person-rolodex text-yellow-400 text-xl"></i>
                <a href="{{ route('budget.show') }}" class="text-[#eee] font-medium text-lg">Budget Manager</a>
            </li>
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-youtube text-yellow-400 text-xl"></i>
                <a href="{{ route('youtube-videos.create') }}" class="text-[#eee] font-medium text-lg">youtubevideos</a>
            </li>
            </li>
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-badge-ad-fill text-yellow-400 text-xl "></i>
                <a href="{{ route('managead.index') }}" class="text-[#eee] font-medium text-lg">Manage Your Ad</a>
            </li>
            <li
            class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
            <i class="bi bi-gear text-yellow-400 text-xl"></i>
            <a href="" class="text-[#eee] font-medium text-lg">Settings</a>
        </li>
            <div class="w-full mt-4 h-10 rounded-lg flex px-2 text-center">
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit"
                        class="text-base font-semibold text-yellow-500 border border-yellow-400 px-12 py-2 rounded-lg flex items-center justify-center hover:bg-yellow-500 hover:text-white transition duration-300 ease-in-out">
                        <i class="bi bi-box-arrow-right mr-2"></i>
                        Logout
                    </button>
                </form>

            </div>



        </ul>
    </div>


</div>