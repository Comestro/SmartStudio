@extends('admin.adminBase')


@section('content')
<div class="w-full h-auto ">
    {{-- nav --}}
    


    {{-- Dashboard --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
       
        <h1 class="text-3xl font-bold text-yellow-500 mb-6">Edit Gallery: {{ $gallery->gallery_title }}</h1>
    
        <form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
           
            <div class="mb-4">
                <label for="gallery_title" class="block text-lg font-medium text-white">Gallery Title</label>
                <input type="text" id="gallery_title" name="gallery_title" value="{{ old('gallery_title', $gallery->gallery_title) }}" class="mt-1 text-white bg-gray-600 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500" required>
            </div>
    
        
            <div class="mb-4">
                <label for="content" class="block text-white  text-lg font-medium ">Content</label>
                <textarea id="content" name="content" rows="4" class="mt-1 text-white bg-gray-600 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">{{ old('content', $gallery->content) }}</textarea>
            </div>
    
           
            <div class="mb-4">
                <label for="category_id" class="block text-lg font-medium text-white ">Category</label>
                <select id="category_id" name="category_id" class="mt-1 block w-full text-white bg-gray-600 px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $gallery->category_id) == $category->id ? 'selected' : '' }}>
                            {{ $category->cat_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="images" class="block text-lg font-medium text-white ">Gallery Images (Leave empty to keep existing)</label>
                <input type="file" name="images[]" id="images" multiple class="mt-1 text-white bg-gray-600 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
           
            <div class="mb-6">
                <button type="submit" class="inline-block px-6 py-3 bg-yellow-500 text-white text-lg font-semibold rounded-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 mt-4">
                    Update Gallery
                </button>
            </div>
        </form>
    
        <h2 class="text-2xl font-bold text-yelloe-500 mb-4">Existing Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($gallery->images as $image)
                <div class="relative group">
                    <img src="{{ asset('images/gallery/' . $image->image_path) }}" alt="Gallery Image" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    
                    <form action="{{ route('gallery.deleteImage', $image->id) }}" method="POST" class="absolute top-2 right-2">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 bg-white p-1 rounded-full shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
        
    </div>
</div>


</div>

@endsection 



