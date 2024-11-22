@extends('admin.adminBase')

@section('content')
<div class="w-full h-auto ">
   
    {{-- Gallery Images --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Gallery Title and Back Link -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold  text-yellow-500">{{ $item->gallery_title }}</h1>
            <a href="{{ route('gallery.manageGallery') }}" class="text-yellow-500 hover:text-yellow-700 border-b-2 border-yellow-300 text-lg"><i class="bi bi-box-arrow-in-left"></i> Back to Manage Gallery</a>
        </div>
    
        <!-- Gallery Images Section -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($item->images as $image)
                <div class="group relative">
                    <!-- Image -->
                    <img src="{{ asset('images/gallery/' . $image->image_path) }}" alt="Gallery Image" class="w-full h-64 object-cover rounded-lg shadow-lg transition-all duration-300 transform group-hover:scale-105">
    
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


