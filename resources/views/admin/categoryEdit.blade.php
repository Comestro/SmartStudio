@extends('admin.adminBase')


@section('content')
<div class="w-[80%] h-auto bg-black">
    {{-- nav --}}
    <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4">
      <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
      </div>
      <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
          <div class="relative w-full">
              <input type="text" placeholder="Search..." class="w-full pl-4 pr-10 py-2 bg-white rounded-full focus:outline-none border border-yellow-400">
              <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                  <button class="p-2 rounded-full text-black">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                      </svg>
                  </button>
              </div>
          </div>
      </div>
      

      <div class="absolute right-4 top-4 w-full md:w-auto h-auto flex items-center gap-2">
    
    <div class="w-full md:w-24 h-10 rounded-lg flex items-center justify-center text-center">
    <form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="text-base font-semibold text-yellow-500 border border-yellow-400 px-2 py-2 rounded-lg flex items-center justify-center hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out">
        <i class="bi bi-box-arrow-right mr-2"></i>
        Logout
    </button>
</form>

    </div>

    <!-- Profile Image -->
    <div class="w-12 h-12 rounded-full flex items-center justify-center">
        <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full" alt="Profile Picture"/>
    </div>
</div>

  </div>


    {{-- Dashboard --}}


 



    <div class="flex justify-center items-center p-6">
    <div class="w-full max-w-lg sm:max-w-md md:max-w-2xl lg:max-w-3xl xl:max-w-4xl px-4">

        {{-- Category Form --}}
        <div class="bg-gray-900 p-6 md:p-10 rounded-lg shadow-lg">
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
                    class="w-full bg-yellow-400 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                    Edit Category
                </button>
            </form>
        </div>

       
       

    </div>
</div>


</div>

@endsection 
