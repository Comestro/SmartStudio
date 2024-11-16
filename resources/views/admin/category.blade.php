{{-- resources/views/admin/category.blade.php --}}
@extends('admin.adminBase')

@section('title', 'Category Management')

@section('content')
<div class="flex justify-center items-center p-6">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl">

        {{-- Category Form --}}
        <div class="bg-gray-900 p-6 md:p-10 rounded-lg shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Add New Category</h2>
            <form action="{{ route('category') }}" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-5">
                @csrf
                <div>
                    <label for="category-name" class="block text-sm font-medium text-gray-300">Category Name</label>
                    <input type="text" name="cat_name" value="{{ old('cat_name') }}"
                        placeholder="Enter category name"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="category-description" class="block text-sm font-medium text-gray-300">Description</label>
                    <input type="text" name="cat_description" value="{{ old('cat_description') }}"
                        placeholder="Enter category description"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_description')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="category-image" class="block text-sm font-medium text-gray-300">Image</label>
                    <input type="file" name="cat_image" value="{{ old('cat_image') }}"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_image')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-yellow-400 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                    Add Category
                </button>
            </form>
        </div>

        {{-- Category Table --}}
        <div class="bg-gray-900 p-6 md:p-10 rounded-lg shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Manage Categories</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-gray-800 rounded-lg">
                    <thead>
                        <tr class="bg-gray-700 text-white">
                            <th class="px-4 md:px-6 py-3 text-left font-semibold">ID</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold">Name</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold">Slug</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold">Image</th>
                            <th class="px-4 md:px-6 py-3 text-center font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr class="border-t border-white hover:bg-gray-700 transition duration-300">
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $item->id }}</td>
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $item->cat_name }}</td>
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $item->cat_slug }}</td>
                                <td class="px-4 md:px-6 py-3">
                                    <img src="{{ asset('images/' . $item->cat_image) }}" alt="{{ $item->cat_name }}"
                                        class="w-16 h-16 rounded-lg object-cover">
                                </td>
                                <td class="px-4 md:px-6 py-3 flex justify-center gap-2">
                                    <a href="{{ route('category.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition duration-300">Edit</a>
                                    <form action="{{ route('category.trash', $item->id) }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
