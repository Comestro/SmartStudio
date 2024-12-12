@extends('letter.layout.app')
@section('content')
<div class="max-w-3xl mx-auto p-6 bg-gray-800 shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold text-yellow-400 mb-6 text-center">Edit Letter Pad</h1>
    <form action="{{ route('letter.update', $letterPad->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

       
        <div class="mb-4">
            <label for="name" class="block text-lg font-medium text-yellow-400">Name:</label>
            <input 
                type="text" 
                id="name" 
                name="name" 
                value="{{ $letterPad->name }}" 
                class="mt-2 p-3 w-full text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
        </div>

      
        <div class="mb-4">
            <label for="address" class="block text-lg font-medium text-yellow-400">Address:</label>
            <textarea 
                id="address" 
                name="address" 
                rows="3" 
                class="mt-2 p-3 w-full text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>{{ $letterPad->address }}</textarea>
        </div>

        
        <div class="mb-4">
            <label for="subject" class="block text-lg font-medium text-yellow-400">Subject:</label>
            <input 
                type="text" 
                id="subject" 
                name="subject" 
                value="{{ $letterPad->subject }}" 
                class="mt-2 p-3 w-full text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" 
                required>
        </div>

       
        <div class="mb-4">
            <label for="body" class="block text-lg font-medium text-yellow-400">Body:</label>
            <textarea 
                id="body" 
                name="body" 
                rows="5" 
                class="mt-2 p-3 w-full text-black border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                required>{{ $letterPad->body }}</textarea>
        </div>

      
        <div class="mb-4">
            <label for="signature" class="block text-lg font-medium text-yellow-400">Signature (Optional):</label>
            <input 
                type="file" 
                id="signature" 
                name="signature" 
                class="mt-2 p-2 w-full text-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

      
        <div class="mb-4">
            <button 
                type="submit" 
                class="w-full py-3 bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold rounded-lg hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-400">
                Update Letter Pad
            </button>
        </div>
    </form>
</div>


@endsection