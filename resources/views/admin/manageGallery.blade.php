@extends('admin.adminBase')

@section('content')
@if(session('msg'))
    <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
        {{ session('msg') }}
    </div>
    @endif
<div class="w-full h-auto m-0 p-0 ">
    
    
    
    <div class="flex justify-center items-center ">

        <div class="w-full max-w-5xl  ">
           
            <!-- Category Card Container -->
            <div class="  ">
                <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6 text-center">Manage Gallery Images</h2>
                
            
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($galleries as $item)
                        <div class="bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <div class="relative">
                                @if($item->images->first())
                                    <a href="{{ route('gallery.viewGallery', $item->id) }}">
                                        <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}" alt="{{ $item->gallery_title }}" class="w-full h-48 object-cover">
                                    </a>
                                @else
                                    <div class="w-full h-48 bg-gray-700 flex items-center justify-center text-white">No Image</div>
                                @endif
                            </div>
                            <div class="p-4">
                                
                                <h3 class="text-lg font-semibold text-yellow-400">{{ $item->gallery_title }}</h3>
                                <div class="flex items-center mt-2">
                                    <i class="bi bi-tag text-yellow-500 mr-2"></i>
                                    <p class="text-gray-300 ">Slug: {{ $item->slug }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <i class="bi bi-file-text text-yellow-500 mr-2"></i>
                                    <p class="text-gray-300 truncate">Content: {{ $item->content }}</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <i class="bi bi-folder text-yellow-500 mr-2"></i>
                                    <p class="text-gray-300">Category: {{ $item->category->cat_name }}</p>
                                </div>
                                <div class="mt-4 flex justify-between items-center">
                                    <a href="{{ route('gallery.viewGallery', $item->id) }}" class="bg-gradient-to-r from-green-400 to-green-600 hover:bg-gradient-to-l text-white px-3 py-1 rounded-md  transition duration-300 flex items-center">
                                        <i class="bi bi-eye mr-1"></i> View
                                    </a>
                                    <a href="{{ route('gallery.edit', $item->id) }}" class="bg-gradient-to-r from-indigo-400 to-indigo-600 hover:bg-gradient-to-l text-white px-3 py-1 rounded-md  transition duration-300 flex items-center">
                                        <i class="bi bi-pencil mr-1"></i> Edit
                                    </a>
                                    <form action="{{ route('gallery.trash', $item->id) }}" method="POST" class="inline-block"
                                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-gradient-to-r from-red-400 to-red-600 hover:bg-gradient-to-l text-white px-3 py-1 rounded-md  transition duration-300 flex items-center">
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
