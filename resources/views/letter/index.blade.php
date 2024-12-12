@extends('letter.layout.app')

@section('content')
<div class="max-w-5xl mx-auto p-6 bg-gray-800 shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold text-yellow-400 mb-6 text-center">Letter Pad List</h1>
    <table class="w-full table-auto border-collapse border border-gray-300">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2 text-yellow-400">Name</th>
                <th class="border border-gray-300 px-4 py-2 text-yellow-400">Address</th>
                <th class="border border-gray-300 px-4 py-2 text-yellow-400">Subject</th>
                <th class="border border-gray-300 px-4 py-2 text-yellow-400">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($letterPad as $letter)
                <tr>
                    <td class="border border-gray-300 px-4 py-2 text-white">{{ $letter->name }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-white">{{ $letter->address }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-white">{{ $letter->subject }}</td>
                    <td class="border border-gray-300 px-4 py-2 text-white">
                        <a href="{{ route('letter.show', $letter->id) }}" class="bg-green-500 text-white px-3 py-1 rounded">View</a>
                        <a href="{{ route('letter.edit', $letter->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('letter.destroy', $letter->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
