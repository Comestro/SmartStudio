@extends('admin.adminBase')

@section('content')

<div class="w-full md:w-3/6 mx-auto">
    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Add New Video</h1>

    <form action="{{ route('youtube-video.update',$youtubeVideo->id) }}" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mb-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-yellow-400 font-semibold mb-2">Title:</label>
            <input type="text" name="title" value="{{ $youtubeVideo['title'] }}" id="title" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="mb-4">
            <label for="link" class="block text-yellow-400 font-semibold mb-2">Video Link:</label>
            <input type="url" name="link" value="{{ $youtubeVideo['link'] }}" id="link" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-yellow-400 font-semibold mb-2">Status</label>
            <select name="status" id="status" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
                <option value="1" {{ $youtubeVideo->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$youtubeVideo->status ? 'selected' : '' }}>Inactive</option>
            </select>
            
        </div>
        <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-400 to-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Save Video
        </button>
    </form>
</div>



@endsection
