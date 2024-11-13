@extends('admin.adminBase')

@section('content')
<div class="w-[80%] h-auto">
    <div class="container mx-auto p-8">

        <div class="w-full mb-6">
            <div class="flex justify-between items-center bg-gradient-to-r from-yellow-100 to-yellow-500 text-white p-4 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-black">Banner Page</h2>
                <a href="{{ route('admin.banners.index') }}" class="inline-flex items-center bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-800 shadow-md transition duration-200">
                ← Banner List
            </a>
            </div>
        </div>
       
        <div class="bg-gray-900 p-8 rounded shadow-lg">
            <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data" class="space-y-10">
                @csrf

                <div>
                    <label for="b_name" class="block text-yellow-400 text-xl font-medium mb-2">Banner Name</label>
                    <input type="text" id="b_name" name="b_name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-400 focus:outline-none">
                    @error('b_name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="b_image" class="block text-yellow-400 text-xl  font-medium mb-2">Banner Image</label>
                    <input type="file" id="b_image" name="b_image" required
                        class="w-full px-4 py-2 border border-gray-300 text-black bg-white rounded-md shadow-sm focus:ring focus:ring-blue-400 focus:outline-none">
                    @error('b_image')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="status" class="block text-yellow-400 text-xl font-medium mb-2">Status</label>
                    <select id="status" name="status" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-400 focus:outline-none">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="w-full  bg-gradient-to-r from-yellow-400 to-blue-500  text-white py-3 rounded-md hover:bg-blue-700 shadow-md mt-6">
                    Save Banner
                </button>
            </form>
        </div>
    </div>
    </div>
@endsection
