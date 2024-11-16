@extends('admin.adminBase')

@section('content')
<div class="w-[80%] h-auto bg-black">
    {{-- nav --}}
    <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4">
      <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
      </div>
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

    {{-- Dashboard --}}
    @if(session('msg'))
    <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
        {{ session('msg') }}
    </div>
    @endif
    
    <div class="flex justify-center items-center min-h-screen p-4">
        <div class="w-full max-w-5xl p-4 bg-black">
    
            <!-- Category Card Container -->
            <div class="p-6 md:p-10 rounded-lg shadow-lg">
                <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6 text-center">Manage Gallery Images</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($galleries as $item)
                        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <div class="relative">
                                @if($item->images->first())
                                    <a href="{{ route('gallery.viewGallery', $item->id) }}">
                                        <img src="{{ asset('images/' . $item->images->first()->image_path) }}" alt="{{ $item->gallery_title }}" class="w-full h-48 object-cover">
                                    </a>
                                @else
                                    <div class="w-full h-48 bg-gray-700 flex items-center justify-center text-white">No Image</div>
                                @endif
                            </div>
                            <div class="p-4">
                                <h3 class="text-lg font-semibold text-yellow-400">{{ $item->gallery_title }}</h3>
                                <div class="flex items-center mt-2">
                                    <i class="bi bi-tag text-yellow-500 mr-2"></i>
                                    <p class="text-gray-300">Slug: {{ $item->slug }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <i class="bi bi-file-text text-yellow-500 mr-2"></i>
                                    <p class="text-gray-300">Content: {{ $item->content }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <i class="bi bi-folder text-yellow-500 mr-2"></i>
                                    <p class="text-gray-300">Category: {{ $item->category->cat_name }}</p>
                                </div>
                                <div class="mt-4 flex justify-between items-center">
                                    <a href="{{ route('gallery.viewGallery', $item->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-md hover:bg-green-600 transition duration-300 flex items-center">
                                        <i class="bi bi-eye mr-1"></i> View
                                    </a>
                                    <a href="{{ route('gallery.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition duration-300 flex items-center">
                                        <i class="bi bi-pencil mr-1"></i> Edit
                                    </a>
                                    <form action="{{ route('gallery.trash', $item->id) }}" method="POST" class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition duration-300 flex items-center">
                                            <i class="bi bi-trash mr-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    
        </div>
    </div>
</div>
@endsection
