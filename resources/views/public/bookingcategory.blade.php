@extends('public.layout')

@section('content')
 <!-- Main Content -->
 <div class="w-full flex justify-center p-6 bg-black">
    <div class="bg-gradient-to-r from-gray-700 to-gray-500 h-auto p-6 rounded-lg shadow-lg w-full max-w-5xl">
        
      
        <div class="flex justify-between items-center bg-gradient-to-r from-yellow-400 to-yellow-200 text-white p-4 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-gray-700">Categories</h2>
        </div>

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-6">
            @foreach ($bookcat as $cat)
            <a href="{{ route('category.name', $cat->cat_name) }}" 
                class="bg-gradient-to-b from-gray-600 to-gray-800 shadow-lg rounded-lg p-4 transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/' . $cat->cat_image) }}" 
                     alt="Category Image" 
                     class="w-full h-40 object-cover rounded-md mb-4">
            
                <h3 class="text-lg text-center text-yellow-400 font-semibold mb-3 capitalize">
                    {{ $cat->cat_name }}
                </h3>
                <button class="bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-lg w-full hover:bg-yellow-600 transition duration-300">
                    View More
                </button>
            </a>
            @endforeach
        </div>
    </div>
</div>

@endsection
