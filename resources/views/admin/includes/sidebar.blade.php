<div class="w-full h-full pl-10 mt-2">
    <ul>
        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 hover:border-r-8 border-yellow-500">
            <i class="bi bi-house-door text-yellow-400 text-xl"></i>
            <a href="{{route('dashboard')}}" class="text-[#eee] font-medium text-lg">Dashboard</a>
        </li>

        <details class="mt-2">
            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                <i class="bi bi-calendar-event text-yellow-400 text-xl"></i>
                <span class="text-[#eee] font-medium text-lg">Event</span>
            </summary>
            <ul class="pl-8">
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="" class="text-yellow-400 font-medium text-md">Add Event</a>
                </li>
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="" class="text-[#eee] font-medium text-md">Check Schedule</a>
                </li>
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="" class="text-yellow-400 font-medium text-md">Ordered List</a>
                </li>
            </ul>
        </details>

        <details class="mt-2">
            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                <i class="bi bi-person-circle text-yellow-400 text-xl"></i>
                <span class="text-[#eee] font-medium text-lg">Customer</span>
            </summary>
            <ul class="pl-8">
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="" class="text-[#eee] font-medium text-md">Add Customer</a>
                </li>
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="" class="text-[#eee] font-medium text-md">Manage Customers</a>
                </li>
            </ul>
        </details>
        
        <details class="mt-2">
            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                <i class="bi bi-box text-yellow-400 text-xl"></i>
                <a href="{{route('category')}}" class="text-[#eee] font-medium text-lg">Category</a>
            </summary>
        </details>
        <details class="mt-2">
            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                <i class="bi bi-person-circle text-yellow-400 text-xl"></i>
                <span class="text-[#eee] font-medium text-lg">Gallery</span>
            </summary>
            <ul class="pl-8">
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="{{route('gallery.insertGallery')}}" class="text-[#eee] font-medium text-md">Add Gallery</a>
                </li>
                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                    <a href="{{route('gallery.manageGallery')}}" class="text-[#eee] font-medium text-md">Manage Gallery</a>
                </li>
            </ul>
        </details>
        
        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
            <i class="bi bi-gear text-yellow-400 text-xl"></i>
            <a href="" class="text-[#eee] font-medium text-lg">Settings</a>
        </li>
         
        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
            <i class="bi bi-person-lines-fill text-yellow-400 text-xl"></i>
            <a href="{{route('admin.contact.list')}}" class="text-[#eee] font-medium text-lg">Contact List</a>
        </li>
        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
            <i class="bi bi-person-lines-fill text-yellow-400 text-xl"></i>
            <a href="{{route('banner.create')}}" class="text-[#eee] font-medium text-lg">Banner</a>
        </li>
        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
            <i class="bi bi-person-lines-fill text-yellow-400 text-xl"></i>
            <a href="{{ route('budget.show') }}" class="text-[#eee] font-medium text-lg">Budget Manager</a>
        </li>
         <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
            <i class="bi bi-person-lines-fill text-yellow-400 text-xl"></i>
            <a href="{{ route('youtube-videos.create') }}" class="text-[#eee] font-medium text-lg">youtubevideos</a>
        </li>
        </li> 
        {{-- <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
        <i class="bi bi-flag text-yellow-400 text-xl"></i> 
       <a href="{{ route('banner.create') }}" class="text-[#eee] font-medium text-lg">Banner</a>
       </li> --}}

       
    </ul>
</div>