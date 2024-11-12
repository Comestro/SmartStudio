@extends('admin.adminBase')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6 text-center">Banners List</h2>

    <!-- Banner Table -->
    <div class="overflow-x-auto bg-white p-6 rounded shadow-md">
        <table class="min-w-full bg-white border">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-sm text-gray-600">#</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-sm text-gray-600">Banner Name</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-sm text-gray-600">Image</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-sm text-gray-600">Status</th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 text-left text-sm text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($banners as $banner)
                <tr>
                    <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $loop->iteration }}</td>
                    <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $banner->b_name }}</td>
                    <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">
                        <img src="{{ asset('images/' . $banner->b_image) }}" alt="Banner Image" class="w-16 h-16 object-cover rounded">
                    </td>
                    <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">
                        <form action="{{ route('admin.banner.toggleStatus', $banner->id) }}" method="POST">
                            @csrf
                            <button type="submit" 
                                class="focus:outline-none {{ $banner->status ? 'text-green-500' : 'text-red-500' }}"
                            >
                                {{ $banner->status ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                    </td>
                    <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">
                        <a href="#" class="text-blue-500 hover:underline">Edit</a>
                        {{-- <a href="#" >Delete</a> --}}
                        <form action="{{ route('banner.delete', $banner->id) }}"
                            method="GET"
                            onsubmit="return confirm('Are you sure you want to delete this category?');">
                            @csrf
                            <button type="submit"  class="text-red-500 hover:underline ml-2">Delete</button>
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

@endsection
