@extends('admin.adminBase')


@section('content')
<div class="w-[80%] h-auto bg-black">
    {{-- nav --}}
    <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4">
      <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
      </div>
      <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
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


    {{-- Dashboard --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Gallery Title and Back Link -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-extrabold text-gray-900">{{ $item->gallery_title }}</h1>
            <a href="{{ route('gallery.manageGallery') }}" class="text-blue-500 hover:text-blue-700 text-lg">Back to Manage Gallery</a>
        </div>
    
        <!-- Gallery Images Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($item->images as $image)
                <div class="group relative">
                    <!-- Image -->
                    <img src="{{ asset('images/' . $image->image_path) }}" alt="Gallery Image" class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-300 transform group-hover:scale-105">
    
                    <!-- Hover Effect (Image Description) -->
                    <div class="absolute inset-0 bg-black bg-opacity-40 opacity-0 group-hover:opacity-100 flex justify-center items-center rounded-lg text-white text-lg font-semibold transition-opacity duration-300">
                        <span>{{ $item->gallery_title }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

 



    
    
</div>


</div>

@endsection 


