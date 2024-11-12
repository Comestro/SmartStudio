@extends('admin.adminBase')

@section('content')
    <div class="container mx-auto p-6">
        @if (session('msg'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
                {{ session('msg') }}
            </div>
        @endif
        <a href="{{route('admin.banners.index')}}" class="bg-blue-800 text-white px-6 py-2">List </a>
        <div class="bg-neutral-50">
            <h2 class="text-2xl font-bold  mb-6 text-center">Create New Banner</h2>
        
        </div>
        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data"
            class="bg-white p-6 rounded shadow-md">
            @csrf

            <div class="mb-4">
                <label for="b_name" class="block text-gray-700">Banner Name</label>
                <input type="text" id="b_name" name="b_name" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('b_name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="b_image" class="block text-gray-700">Banner Image</label>
                <input type="file" id="b_image" name="b_image" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                @error('b_image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="status" class="block text-gray-700">Status</label>
                <select id="status" name="status" required
                    class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600">
                Save Banner
            </button>
        </form>


    </div>
    
@endsection
