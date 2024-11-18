@extends('admin.adminBase')

@section('content')

<div class="w-full md:w-3/6 mx-auto">
    <h1 class="text-3xl font-bold text-yellow-500 mb-6 text-center">Edit Your Video</h1>

    <form action="{{ route('youtube-video.update',$youtubeVideo->id) }}" method="POST" class="max-w-md mx-auto bg-gray-700 p-6 rounded-lg shadow-lg mb-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block text-white font-semibold mb-2">Title:</label>
            <input type="text" name="title" value="{{ $youtubeVideo['title'] }}" id="title" required
                   class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <div class="mb-4">
            <label for="title" class="block text-white font-semibold mb-2">description:</label>
            <input type="text" name="description" value="{{ $youtubeVideo['description'] }}" id="description" required
                   class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <div class="mb-4">
            <label for="link" class="block text-white font-semibold mb-2">Video Link:</label>
            <input type="url" name="link" value="{{ $youtubeVideo['link'] }}" id="link" required
                   class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
        </div>
        <div class="mb-4">
            <label for="status" class="block text-white font-semibold mb-2">Status</label>
            <select name="status" id="status" class="w-full p-2 sm:p-3 mt-2 bg-gray-800 border-gray-700 rounded-lg  focus:ring-2 focus:ring-yellow-500 focus:outline-none" required>
                <option value="1" {{ $youtubeVideo->status ? 'selected' : '' }}>Active</option>
                <option value="0" {{ !$youtubeVideo->status ? 'selected' : '' }}>Inactive</option>
            </select>
            
        </div>
        <button type="submit"
                class="w-full bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300 mt-2">
            Update Video
        </button>
    </form>
</div>



@endsection
