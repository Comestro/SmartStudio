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


 



    <div class="flex justify-center items-center min-h-screen p-4 ">
        <div class="w-full max-w-5xl p-4">
    
            <!-- Category Table Container -->
            <div class="bg-gray-900 p-6 md:p-10 rounded-lg shadow-lg">
                <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6 text-center">Manage Gallery Images</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-gray-800 rounded-lg border border-gray-700">
                        <thead>
                            <tr class="bg-gray-700 text-white">
                                <th class="px-4 md:px-6 py-3 text-left font-semibold">ID</th>
                                <th class="px-4 md:px-6 py-3 text-left font-semibold">Name</th>
                                <th class="px-4 md:px-6 py-3 text-left font-semibold">Slug</th>
                                <th class="px-4 md:px-6 py-3 text-left font-semibold">Image</th>
                                <th class="px-4 md:px-6 py-3 text-left font-semibold">Content</th>
                                <th class="px-4 md:px-6 py-3 text-left font-semibold">Category</th>
                                <th class="px-4 md:px-6 py-3 text-center font-semibold">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($galleries as $item)
                                <tr class="border-t border-gray-600 odd:bg-gray-800 even:bg-gray-700 hover:bg-gray-600 transition duration-300">
                                    <td class="px-4 md:px-6 py-3 whitespace-nowrap text-white">{{ $item->id }}</td>
                                    <td class="px-4 md:px-6 py-3 whitespace-nowrap text-gray-300">{{ $item->gallery_title }}</td>
                                    <td class="px-4 md:px-6 py-3 whitespace-nowrap text-gray-300">{{ $item->slug }}</td>
                                    <td class="px-4 md:px-6 py-3">
                                        {{-- <img src="{{ asset('images/' . $item->cat_image) }}" alt="{{ $item->cat_name }}"
                                            class="w-16 h-16 rounded-lg object-cover"> --}}
                                    </td>
                                    <td class="px-4 md:px-6 py-3 whitespace-nowrap text-gray-300">{{ $item->content }}</td>
                                    <td class="px-4 md:px-6 py-3 whitespace-nowrap text-gray-300">{{ $item->category_id }}</td>
                                    <td class="px-4 md:px-6 py-3 flex justify-center gap-2">
                                        <a href="#" class="bg-blue-500 text-white px-3 py-1 rounded-md hover:bg-blue-600 transition duration-300">Edit</a>
                                        <form action="{{ route('gallery.delete', $item->id) }}" method="GET"
                                            onsubmit="return confirm('Are you sure you want to delete this category?');">
                                            @csrf
                                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-600 transition duration-300">Delete</button>
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
    
</div>


</div>

@endsection 
