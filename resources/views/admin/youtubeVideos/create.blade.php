{{-- resources/views/admin/category.blade.php --}}
@extends('admin.adminBase')

@section('title', 'You-tube Video')

@section('content')
<style>
     .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }


        .scrollbar-hide {
            scrollbar-width: none;
        }
</style>
@if(session('msg'))
<div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
    {{ session('msg') }}
</div>
@endif
<div class="flex justify-center items-center p-6">
   
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl">

        {{-- You-tube Video Insert Form --}}
        <div class="bg-gray-900  shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Add New Video</h2>
            <form action="{{  route('youtube-videos.store') }}" method="POST"  class="space-y-4 md:space-y-5">
                @csrf
                <div>
                    <label for="" class="block text-sm font-medium text-gray-300">Title:</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}"
                        placeholder="Enter Your Video Title Here..." required
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @error('title')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="" class="block text-sm font-medium text-gray-300">Description:</label>
                    <input type="text" name="description" value="{{ old('description') }}" required
                        placeholder="Enter category description"
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @error('description')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="link" class="block text-sm font-medium text-gray-300">Video Link:</label>
                    <input type="url" name="link" value="{{ old('link') }}" required
                        class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    @error('link')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div >
                    <label for="status" class="block text-sm font-medium text-gray-300">Status:</label>
                    <select name="status" id="status" required
                            class="w-full p-2 sm:p-3 mt-2 bg-gray-800 border-gray-700 rounded-lg  focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button type="submit"
                    class="w-full bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                    Save Video
                </button>
            </form>
        </div>

        {{--  Table --}}
        <div class=" ">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Manage Videos</h2>
            <div class="overflow-x-auto scrollbar-hide rounded-lg">
                <table class="min-w-full bg-gray-800 rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-gray-700 text-white">
                            <th class="px-4 md:px-6 py-3 text-left font-semibold tracking-wider">Title</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold tracking-wider">Video Link</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold tracking-wider">Status</th>
                            <th class="px-4 md:px-6 py-3 text-center font-semibold tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($videos as $video)
                            <tr class="border-t border-white hover:bg-gray-700 transition duration-300">
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $video->title }}</td>
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap"><a href="{{ $video->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $video->link }}</a></td>
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap"><form action="{{ route('admin.video.toggleStatus', $video->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" 
                                        class="focus:outline-none {{ $video->status ? 'bg-gradient-to-r from-green-500 to-green-700 hover:bg-gradient-to-l  transition duration-300' : 'bg-gradient-to-r from-red-500 to-red-700 hover:bg-gradient-to-l transition duration-300' }} text-white py-2 px-4 rounded-lg transition duration-300"
                                    >
                                        {{ $video->status ? 'Active' : 'Inactive' }}
                                    </button>
                                </form></td>
                               
                                <td class="px-4 md:px-6 py-3 flex justify-center gap-2">
                                    <a href="{{ route('youtube-videos.edit', $video->id) }}" class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">Edit</a>
                                    <form action="{{ route('youtube-video.trash', $video->id)  }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Are you sure you want to delete this video?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-gradient-to-r from-red-500 to-red-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l transition duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3" class="px-4 py-2 text-center text-gray-500">No videos available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
