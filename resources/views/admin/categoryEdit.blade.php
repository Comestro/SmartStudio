@extends('admin.adminBase')


@section('content')
@if(session('msg'))
<div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
    {{ session('msg') }}
</div>
@endif
<div class="w-full h-auto ">
    
    <div class="flex justify-center items-center p-6">
    <div class="w-full max-w-lg sm:max-w-md md:max-w-2xl lg:max-w-3xl xl:max-w-4xl px-4">

        {{-- Category Form --}}
        <div class="bg-gray-700 p-6 md:p-10 rounded-lg shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Edit Category</h2>
            <form action="{{ route('category.update',$data->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4 md:space-y-5">
                @method("put")
                @csrf

               
                {{-- Category Name --}}
                <div>
                    <label for="category-name" class="block text-sm font-medium text-gray-300">Category Name</label>
                    <input type="text" name="cat_name" value="{{ $data['cat_name'] }}"
                        placeholder="Enter category name"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_name')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Category Slug --}}
                {{-- <div>
                    <label for="category-slug" class="block text-sm font-medium text-gray-300">Category Slug</label>
                    <input type="text" name="cat_slug" value="{{ $data['cat_slug'] }}"
                        placeholder="Enter category slug"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_slug')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div> --}}
                {{-- Category Description --}}
                <div>
                    <label for="category-description" class="block text-sm font-medium text-gray-300">Description</label>
                    <input type="text" name="cat_description" value="{{ $data['cat_description'] }}"
                        placeholder="Enter category description"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_description')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Category Image --}}
                <div>
                    <label for="category-image" class="block text-sm font-medium text-gray-300">Image</label>
                    <input type="file" name="cat_image" value="{{ $data['cat_image'] }}"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    @error('cat_image')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                    Edit Category
                </button>
            </form>
        </div>

       
       

    </div>
</div>


</div>

@endsection 
