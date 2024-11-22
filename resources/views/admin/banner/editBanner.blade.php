@extends('admin.adminBase')

@section('content')
@if(session('msg'))
<div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
    {{ session('msg') }}
</div>
@endif
<div class="w-full h-auto">
   
    <div class="container mx-auto p-6">

        <div class="w-full mb-2 ">
            <div class="flex justify-between items-center ">
                <h2 class="lg:text-3xl font-bold text-yellow-500">Banner Edit Page</h2>
                {{-- <a href="{{ route('admin.banners.index') }}" class="inline-flex items-center bg-gradient-to-t from-yellow-400 via-yellow-300 to-yellow-200 text-black px-6 py-3 rounded-md hover:bg-gray-800 shadow-md transition duration-200 lg:text-">
                ← Banner List
            </a> --}}
            </div>
        </div>
        <div class="bg-gray-700 lg:px-6 p-3 rounded-lg shadow-lg ">
            <form action="{{ route('banner.update',$banner->id) }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                @csrf
                @method('PUT')

                <div>
                    <label for="b_name" class="block text-yellow-400 text-xl font-medium mb-2">Banner Name</label>
                    <input type="text" id="b_name" name="b_name" value="{{ old('b_name', $banner->b_name) }}"  required
                        class="w-full text-black px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-500 focus:outline-none">
                    @error('b_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="b_image" class="block text-yellow-400 text-xl  font-medium mb-2">Banner Image</label>
                    <input type="file" id="b_image" name="b_image" value="{{ old('b_image', $banner->b_image) }}" required
                        class="w-full  px-4 py-2 border border-gray-300 text-black bg-white rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">
                    @error('b_image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="status" class="block text-yellow-400 text-xl font-medium mb-2">Status</label>
                    <select id="status" name="status" required
                        class="w-full text-black px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">
                        <option value="1" {{ $banner->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$banner->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="w-full   bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200  text-black font-semibold py-3 rounded-md hover:bg-yellow-700 shadow-md mt-6">
                    Update Banner
                </button>
            </form>
        </div>
    </div>
    </div>
@endsection
