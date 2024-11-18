@extends('admin.adminBase')


@section('content')
<div class="w-full h-auto ">
    {{-- nav --}}
    
    <div class="flex justify-center items-center min-h-screen p-4">
        <div class="w-full max-w-lg sm:max-w-md md:max-w-2xl lg:max-w-3xl xl:max-w-4xl px-4">
    
            <!-- Form Container -->
            <div class="bg-gray-800 p-6 sm:p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl sm:text-3xl md:text-4xl text-yellow-500 font-semibold mb-6 text-center">Add New Images</h2>
                <form class="space-y-4" action="{{ route('gallery.insertGallery') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <!-- Image Name Field -->
                    <div>
                        <label for="gallery_title" class="block text-white text-sm font-medium">Image Name</label>
                        <input type="text" id="gallery_title" name="gallery_title" value="{{ old('gallery_title') }}"
                            placeholder="Enter image name"
                            class="w-full p-2 sm:p-3 mt-2 bg-gray-700 border-2 border-dashed border-gray-300 rounded-lg focus:border-yellow-500 focus:outline-none">
                        @error('gallery_title')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <!-- Category Name Field -->
                    <div>
                        <label for="category_id" class="block text-white text-sm font-medium">Category Name</label>
                        <select id="category_id" name="category_id"
                            class="w-full p-2 sm:p-3 mt-2 bg-gray-700 border-2 border-dashed border-gray-300 rounded-lg text-gray-400 focus:border-yellow-500 focus:outline-none">
                            <option>Select category here</option>
                            @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->cat_name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <!-- Slug Field -->
                    {{-- <div>
                        <label for="slug" class="block text-white text-sm font-medium">Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                            placeholder="Enter image slug"
                            class="w-full p-2 sm:p-3 mt-2 bg-gray-700 border-2 border-dashed border-gray-300 rounded-lg focus:border-yellow-500 focus:outline-none">
                        @error('slug')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div> --}}
    
                    <!-- Content Field -->
                    <div>
                        <label for="content" class="block text-white text-sm font-medium">Content</label>
                        <textarea id="content" name="content" rows="3" placeholder="Enter image description"
                            class="w-full p-2 sm:p-3 mt-2 bg-gray-700 border-2 border-dashed border-gray-300 rounded-lg focus:border-yellow-500 focus:outline-none"></textarea>
                        @error('content')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <!-- Image Upload Field -->
                    <div>
                        <label for="images" class="block text-white text-sm font-medium">Gallery Image</label>
                        <div class="flex items-center justify-center w-full p-4 mt-2 bg-gray-700 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-yellow-500">
                            <div class="text-center">
                                <svg class="w-8 h-8 mx-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.88 9.73l-2.67-2.74V2H11.5L10 0H8L6.5 2H4v5L1.33 9.73a1 1 0 00.28 1.42l1.79 1.02a1 1 0 00.45.11h11.54a1 1 0 00.74-.33l1.79-1.02a1 1 0 00.28-1.42zM9.17 7.57a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zm1.83 11.34a4 4 0 01-4-4h2a2 2 0 004 0h2a4 4 0 01-4 4zm4-10.57a3 3 0 01-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <input type="file" id="images" name="images[]" multiple>
                                <p class="text-xs text-gray-500">Drag and drop files here</p>
                            </div>
                        </div>
                        @error('images')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2 sm:py-3  bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold  rounded-lg hover:bg-yellow-400 transition duration-300">
                        Add Image
                    </button>
                </form>
            </div>
    
        </div>

        
    </div>

    
   
    


</div>

@endsection