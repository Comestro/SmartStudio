@extends('admin.adminBase')

@section('content')
<div class="w-full h-full">
    <div class="container mx-auto p-6">
        <div class="w-full mb-6">
            <div class="flex justify-between items-center bg-gradient-to-r from-yellow-100 to-yellow-500 text-white p-3 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-black">Manage Banner Page</h2>
                <a href="" class="inline-flex items-center bg-gray-700 text-white px-6 py-3 rounded-md hover:bg-gray-800 shadow-md transition duration-200">
                    ← Back to Banner 
                </a>
            </div>
        </div>
        <div class="overflow-x-auto bg-white p-6 rounded-lg shadow-md">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gradient-to-r from-yellow-500 to-teal-500 text-white">
                    <tr>
                        <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-sm">Id</th>
                        <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-sm">Banner Name</th>
                        <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-sm">Image</th>
                        <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-sm">Status</th>
                        <th class="px-4 py-3 border-b-2 border-gray-300 text-left text-sm">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($banners as $banner)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-4 py-3 border-b border-gray-200 text-sm text-gray-600">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3 border-b border-gray-200 text-sm text-gray-600">{{ $banner->b_name }}</td>
                        <td class="px-4 py-3 border-b border-gray-200 text-sm text-gray-600">
                            <img src="{{ asset('images/' . $banner->b_image) }}" alt="Banner Image" class="w-16 h-16 object-cover rounded-lg shadow-sm">
                        </td>
                        <td class="px-4 py-3 border-b border-gray-200 text-sm text-gray-600">
                            <form action="{{ route('admin.banner.toggleStatus', $banner->id) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                    class="focus:outline-none {{ $banner->status ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600' }} text-white py-2 px-4 rounded-lg transition duration-300"
                                >
                                    {{ $banner->status ? 'Active' : 'Inactive' }}
                                </button>
                            </form>
                        </td>
                        <td class="px-4 py-3 border-b border-gray-200 text-sm text-gray-600">
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

        @if(session('msg'))
            <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
                {{ session('msg') }}
            </div>
        @endif
    </div>
</div>

@endsection
