@extends('public.layout')

@section('content')
 <!-- Main Content -->
 <div class="w-full flex p-6">
    <div class="bg-gradient-to-r from-gray-700 to-gray-900 h-auto p-6 rounded-lg shadow-lg w-full max-w-5xl">
        <div class="flex justify-between items-center bg-gradient-to-r from-yellow-100 to-yellow-500 text-white p-4 rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold text-black">Categories</h2>
        </div>
       
        {{-- <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4">
            @foreach ($bookcat as $cat)
            <a href="{{ route('category.name', $cat->cat_name) }}" class="bg-gradient-to-b from-gray-800 to-black shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/' . $cat->cat_image) }}" alt="Card Image" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-xl text-center text-white font-semibold mb-2 capitalize">{{ $cat->cat_name }}</h3>
                <button class="bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-lg mt-4 w-full hover:bg-yellow-600 transition duration-300">View More</button>
            </a>
            @endforeach
        </div> --}}

        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-4">
            @foreach ($bookcat as $cat)
            <a href="{{ route('category.name', $cat->cat_name) }}" class="bg-gradient-to-b from-gray-400 to-black shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/' . $cat->cat_image) }}" alt="Card Image" class="w-full h-32 object-cover rounded-md mb-4">
                <h3 class="text-xl text-center text-white font-semibold mb-2 capitalize">{{ $cat->cat_name }}</h3>
                <button class="bg-yellow-500 text-gray-900 font-semibold px-4 py-2 rounded-lg mt-4 w-full hover:bg-yellow-600 transition duration-300">View More</button>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection
