<div class="lg:w-48 xl:w-64 bg-[#2f363e] hidden lg:block pl-4 h-screen fixed ">
        <div class="w-full h-16 flex items-center justify-center">
           <a href="{{route('home')}}"> <p class="text-2xl text-yellow-400 font-bold">SMART STUDIO</p></a>
        </div>
        <div class="w-full h-10  text-base flex items-center pl-10 text-gray-500 font-semibold">
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
                        <a href="{{ route('category') }}" class="text-white font-medium text-md">Add Event/manage
                            list</a>
                    </li>

                </ul>
            </details>
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

            {{-- <details class="mt-2">
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
            </details> --}}
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-person-circle text-yellow-400 text-xl"></i>
                <a href="{{ route('admin.user.index') }}" class="text-[#eee] font-medium text-lg">Customer</a>
            </li>


            <details class="mt-2">
                <summary
                    class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                    <i class="bi bi-images text-yellow-400 text-xl"></i>
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

            
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-person-rolodex text-yellow-400 text-xl"></i>
                <a href="{{ route('budget.show') }}" class="text-[#eee] font-medium text-lg">Budget Manager</a>
            </li>
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-envelope-arrow-down-fill text-yellow-400 text-xl"></i>
                <a href="{{ route('letter.create') }}" class="text-[#eee] font-medium text-lg">Letter Pad</a>
            </li>
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-youtube text-yellow-400 text-xl"></i>
                <a href="{{ route('youtube-videos.create') }}" class="text-[#eee] font-medium text-lg">youtubevideos</a>
            </li>
            <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                <i class="bi bi-calendar2-check-fill text-yellow-500"></i>
                <a href="{{ route('booking.show') }}" class="text-[#eee] font-medium text-lg">Manage Booking</a>
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
            
            <div class="w-full mt-2 h-10 rounded-lg flex px-2 text-center">
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