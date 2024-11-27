
@section('title','Booking | SmartStudio')
@extends('public.base')

@section('content')


<div class="  px-4 w-full"  >
       

    <div class=" justify-center items-center py-28">
        @if(session('success'))
    <div class="w-full max-w-lg mx-auto mb-4 p-4 text-white bg-green-500 rounded-lg">
        {{ session('success') }}
    </div>
@endif

        <form action="{{route('category.store',$categorySlug)}}" class="w-full max-w-lg mx-auto p-6 bg-gray-800 h-[500px] rounded-lg shadow-lg" method="post">
            @csrf
            <div class="space-y-4">

                <div>
                    <label for="name" class="block text-sm font-medium text-gray-200">Your Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        placeholder="Enter your name"
                        class="w-full p-3 mt-1  text-slate-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
                    @error('name')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label for="mobile" class="block text-sm font-medium text-gray-200">Mobile Number</label>
                    <input type="number" id="mobile" name="mobile" value="{{ old('mobile') }}"
                        placeholder="Enter your Mobile Number"
                        class="w-full p-3 mt-1 text-salte-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
                    @error('mobile')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="category" class="block text-sm font-medium text-gray-200">Category</label>
                    <input id="category" name="category" value="{{$categorySlug}}"
                        placeholder="Type Of Category"
                        class="w-full p-3 mt-1 text-slate-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ">
                    @error('category')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="date" class="block text-sm font-medium text-gray-200">Date </label>
                    <input id="date" name="date"
                    type="date"
                        placeholder="Enter the Date of Booking"
                        class="w-full p-3 mt-1 text-slate-200 capitalize bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 transition ">
                    @error('date')
                    <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-2 sm:py-3  bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold  rounded-lg hover:bg-yellow-400 transition duration-300">
                    Book Now
                </button>
            </div>
        </form>
</div>

@endsection