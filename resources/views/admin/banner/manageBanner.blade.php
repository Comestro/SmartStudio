@extends('admin.adminBase')

@section('content')
<div class="w-full h-full">
    <div class="container mx-auto p-6">
        <div class="w-full mb-4">
            <div class="flex flex-col sm:flex-row justify-between items-center">
                <h2 class="text-2xl sm:text-4xl font-bold text-yellow-500">Manage Banner Page</h2>
                {{-- <a href="" class="inline-flex items-center bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-800 shadow-md transition duration-200">
                    ← Back to Banner 
                </a> --}}
            </div>
        </div>
        <div class="w-full overflow-x-auto bg-gray-800 rounded-lg shadow-lg p-6">
            <div class="min-w-full xl:max-w-5xl mx-auto">
                <table class="min-w-full border border-gray-200">
                    <thead class="bg-gray-700 text-white">
                        <tr>
                            <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-xs sm:text-sm md:text-base min-w-[80px]">Id</th>
                            <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-xs sm:text-sm md:text-base min-w-[150px]">Banner Name</th>
                            <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-xs sm:text-sm md:text-base min-w-[150px]">Image</th>
                            <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-xs sm:text-sm md:text-base min-w-[100px]">Status</th>
                            <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-xs sm:text-sm md:text-base min-w-[200px]">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banners as $banner)
                        <tr class="hover:bg-gray-500 transition duration-200">
                            <td class="px-4 py-3 border-b border-gray-200 text-xs sm:text-sm md:text-base text-gray-200">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3 border-b border-gray-200 text-xs sm:text-sm md:text-base text-gray-200">{{ $banner->b_name }}</td>
                            <td class="px-4 py-3 border-b border-gray-200 text-xs sm:text-sm md:text-base text-gray-200">
                                <img src="{{ asset('/images/banner/' . $banner->b_image) }}" alt="Banner Image" class="w-16 h-16 object-cover rounded-lg shadow-sm">
                            </td>
                            <td class="px-4 py-3 border-b border-gray-200 text-xs sm:text-sm md:text-base text-gray-600">
                                <form action="{{ route('admin.banner.toggleStatus', $banner->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" 
                                        class="focus:outline-none {{ $banner->status ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600' }} text-white py-2 px-4 rounded-lg transition duration-300"
                                    >
                                        {{ $banner->status ? 'Active' : 'Inactive' }}
                                    </button>
                                </form>
                            </td>
                            <td class="px-4 py-3 border-b border-gray-200 text-xs sm:text-sm md:text-base text-gray-600">
                                <a href="{{route('banner.edit', $banner->id)}}" class="inline-flex items-center bg-gradient-to-r from-indigo-500 to-indigo-700 text-white py-2 px-4 rounded-md hover:bg-gradient-to-l transition duration-300">
                                    Edit
                                </a>
                                <form action="{{ route('banner.trash', $banner->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');" class="inline-block ml-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="inline-flex items-center bg-gradient-to-r from-red-500 to-red-700 text-white py-2 px-4 rounded-md hover:bg-gradient-to-l transition duration-300">
                                        Delete
                                    </button>
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
