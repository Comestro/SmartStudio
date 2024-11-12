@extends('admin.adminBase')


@section('content')
<div class="w-[80%] h-auto bg-[#24292d]">
    {{-- nav --}}
    <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4 mb-10">
        <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
        </div>
        <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
            <div class="relative w-full">
                <input type="text" placeholder="Search..."
                    class="w-full pl-4 pr-10 py-2 bg-gray-500 rounded-full focus:outline-none">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <button class="p-2 rounded-full text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 h-auto flex justify-center items-center gap-2">
            <div
                class="w-full md:w-24 h-10 bg-gray-500 rounded-lg flex items-center justify-center text-center p-2">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class=" text-base font-semibold text-[#eee] px-4 py-2 rounded flex item-center justify-center">
                        <img width="24" height="24"
                            src="https://img.icons8.com/sf-black/64/FFFFFF/exit.png" alt="exit"
                            class="ml-1" />
                        Logout
                    </button>
                </form>

            </div>
            <div class="w-12 h-12  rounded-full flex items-center justify-center">
                <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full"
                    alt="" />
            </div>
        </div>
    </div>
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
                    <div>
                        <label for="slug" class="block text-white text-sm font-medium">Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ old('slug') }}"
                            placeholder="Enter image slug"
                            class="w-full p-2 sm:p-3 mt-2 bg-gray-700 border-2 border-dashed border-gray-300 rounded-lg focus:border-yellow-500 focus:outline-none">
                        @error('slug')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
    
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
                                <input type="file" id="images" name="images[]" multiple >
                                <p class="text-xs text-gray-500">Drag and drop files here</p>
                            </div>
                        </div>
                        @error('images')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
    
                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full py-2 sm:py-3 text-white font-semibold bg-yellow-500 rounded-lg hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2">
                        Add Image
                    </button>
                </form>
            </div>
    
        </div>

        
    </div>

    
   
    


</div>

@endsection