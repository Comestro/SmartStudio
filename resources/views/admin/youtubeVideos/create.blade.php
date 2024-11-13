@extends('admin.adminBase')


@section('content')

<div class="w-3/6">
    <h1>Add New Video</h1>

<form action="{{ route('youtube-videos.store') }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md mb-6">
    @csrf
    <div class="mb-4">
        <label for="title" class="block text-gray-700 font-semibold mb-2">Title:</label>
        <input type="text" name="title" id="title" required
               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="mb-4">
        <label for="link" class="block text-gray-700 font-semibold mb-2">Video Link:</label>
        <input type="url" name="link" id="link" required
               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div class="mb-4">
        <label for="status" class="block text-gray-700 font-semibold mb-2">Status:</label>
        <select name="status" id="status" required
                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <button type="submit"
            class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        Save Video
    </button>
</form>
</div>



<div class="w-3/6">
    <h2 class="mt-4 text-lg font-semibold">All Videos</h2>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
        <thead>
            <tr>
                <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-700 font-semibold">Title</th>
                <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-700 font-semibold">Video Link</th>
                <th class="px-4 py-2 border-b border-gray-200 text-left text-gray-700 font-semibold">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($videos as $video)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 border-b border-gray-200">{{ $video->title }}</td>
                    <td class="px-4 py-2 border-b border-gray-200">
                        <a href="{{ $video->link }}" target="_blank" class="text-blue-500 hover:underline">{{ $video->link }}</a>
                    </td>
                    <td class="px-4 py-2 border-b border-gray-200">
                        <span class="{{ $video->status ? 'text-green-600' : 'text-red-600' }}">
                            {{ $video->status ? 'Active' : 'Inactive' }}
                        </span>
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
