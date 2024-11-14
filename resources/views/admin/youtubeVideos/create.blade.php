@extends('admin.adminBase')

@section('content')

<div class="w-full md:w-3/6 mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Add New Video</h1>

    <form action="{{ route('youtube-videos.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mb-6">
        @csrf
        <div class="mb-4">
            <label for="title" class="block text-yellow-400 font-semibold mb-2">Title:</label>
            <input type="text" name="title" id="title" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="mb-4">
            <label for="link" class="block text-yellow-400 font-semibold mb-2">Video Link:</label>
            <input type="url" name="link" id="link" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-yellow-400 font-semibold mb-2">Status:</label>
            <select name="status" id="status" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-400 to-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Save Video
        </button>
    </form>
</div>

<div class="w-full md:w-3/6 mx-auto">
    <h2 class="mt-4 text-xl font-semibold text-gray-800">All Videos</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead class="bg-gradient-to-r from-yellow-500 to-teal-500 text-white">
                <tr>
                    <th class="px-4 py-2 border-b border-gray-200 text-left text-sm">Title</th>
                    <th class="px-4 py-2 border-b border-gray-200 text-left text-sm">Video Link</th>
                    <th class="px-4 py-2 border-b border-gray-200 text-left text-sm">Status</th>
                </tr>
            </thead>
            <tbody>
                @forelse($videos as $video)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">{{ $video->title }}</td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">
                            <a href="{{ $video->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $video->link }}</a>
                        </td>
                        <td class="px-4 py-2 border-b border-gray-200 text-sm text-gray-600">
                            <form action="{{ route('admin.video.toggleStatus', $video->id) }}" method="POST">
                                @csrf
                                <button type="submit" 
                                    class="focus:outline-none {{ $video->status ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600' }} text-white py-2 px-4 rounded-lg transition duration-300"
                                >
                                    {{ $video->status ? 'Active' : 'Inactive' }}
                                </button>
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

@endsection
