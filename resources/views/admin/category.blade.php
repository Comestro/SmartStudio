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


    {{-- Dashboard --}}


    <div class="flex justify-center item-center ">



        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            {{-- category form --}}
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold mb-6">Add New Category</h2>
                <form class="space-y-4" {{ route('category') }} method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>
                        {{-- Category-Name --}}
                        <label for="category-name" class="block text-sm font-medium">Category Name</label>
                        <input type="text" id="" name="cat_name" value="{{ old('cat_name') }}"
                            placeholder="Enter category name"
                            class="w-full p-3 mt-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @error('cat_name')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Category-slug --}}
                    <div>
                        <label for="category-slug" class="block text-sm font-medium">Category slug</label>
                        <input type="text" id="" name="cat_slug" value="{{ old('cat_slug') }}"
                            placeholder="Enter category slug"
                            class="w-full p-3 mt-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @error('cat_slug')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Category-description --}}
                    <div>
                        <label for="category-description" class="block text-sm font-medium">Category
                            description</label>
                        <input type="text" id="" name="cat_description"
                            value="{{ old('cat_description') }}" placeholder="Enter category description"
                            class="w-full p-3 mt-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @error('cat_description')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Category_image --}}
                    <div>
                        <label for="category-image" class="block text-sm font-medium">Category image</label>
                        <input type="file" id="" name="cat_image"  value="{{ old('cat_image') }}" 
                            placeholder="Enter category image"
                            class="w-full p-3 mt-2 bg-gray-700 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        @error('cat_image')
                            <p class="text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700">Add
                        Category</button>
                </form>
            </div>

            {{-- table --}}
            <div class="bg-gray-800 p-8 rounded-lg shadow-lg overflow-x-auto">
                <h2 class="text-2xl font-semibold mb-6">Manage Categories</h2>
                <table class="min-w-full bg-gray-700 rounded-lg">
                    <thead>
                        <tr class="bg-gray-600">
                            <th class="px-4 py-3 text-left font-medium">Category_id</th>
                            <th class="px-4 py-3 text-left font-medium">Category Name</th>
                            <th class="px-4 py-3 text-left font-medium">Category Slug</th>
                            <th class="px-4 py-3 text-left font-medium">Category Image</th>
                            <th class="px-4 py-3 font-medium">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $item)
                            <tr class="border-t border-gray-600">
                                <td class="px-4 py-3">{{ $item->id }}</td>
                                <td class="px-4 py-3">{{ $item->cat_name }}</td>
                                <td class="px-4 py-3">{{ $item->cat_slug }}</td>
                                <td class="px-4 py-3"><img src="{{ asset('images/' . $item->cat_image) }}" alt="{{ $item->cat_name }}"></td>
                                
                                <td class="px-4 py-3 text-right">
                                    <a
                                        class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Edit</a>
                                    
                                       <form action="{{ route('category.delete', $item->id) }}"
                                            method="GET"
                                            onsubmit="return confirm('Are you sure you want to delete this category?');">
                                            @csrf
                                            <button type="submit"  class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">Delete</button>
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