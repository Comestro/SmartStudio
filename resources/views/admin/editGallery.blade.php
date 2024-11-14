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
        <h1 class="text-3xl font-extrabold text-gray-900 mb-6">Edit Gallery: {{ $gallery->gallery_title }}</h1>
    
        
        <a href="{{ route('gallery.manageGallery') }}" class="text-yellow-500 hover:text-yellow-700 mb-4 inline-block">Back to Manage Gallery</a>
    
        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
           
            <div class="mb-4">
                <label for="gallery_title" class="block text-lg font-medium text-gray-700">Gallery Title</label>
                <input type="text" id="gallery_title" name="gallery_title" value="{{ old('gallery_title', $gallery->gallery_title) }}" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
            </div>
    
        
            <div class="mb-4">
                <label for="content" class="block text-lg font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('content', $gallery->content) }}</textarea>
            </div>
    
           
            <div class="mb-4">
                <label for="category_id" class="block text-lg font-medium text-gray-700">Category</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $gallery->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->cat_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="images" class="block text-lg font-medium text-gray-700">Gallery Images (Leave empty to keep existing)</label>
                <input type="file" name="images[]" id="images" multiple class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
           
            <div class="mb-6">
                <button type="submit" class="inline-block px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Update Gallery
                </button>
            </div>
        </form>
    
        <h2 class="text-2xl font-bold text-gray-900 mb-4">Existing Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($gallery->images as $image)
                <div class="relative group">
                    <img src="{{ asset('images/' . $image->image_path) }}" alt="Gallery Image" class="w-full h-64 object-cover rounded-lg shadow-lg">
                   
                    <form action="{{ route('gallery.deleteImage', $image->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Soft Delete Image</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</div>


</div>

@endsection 



