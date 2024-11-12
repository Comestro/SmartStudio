@extends('admin.adminBase')
@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white shadow-lg rounded-lg mt-10">
    <h2 class="text-2xl font-semibold text-center text-gray-700">Contact List</h2>

    @if($contacts->isEmpty())
        <p class="text-center text-gray-500">No contacts found.</p>
    @else
        <table class="min-w-full mt-4 border-collapse">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-left border-b">Name</th>
                    <th class="py-2 px-4 text-left border-b">Email</th>
                    <th class="py-2 px-4 text-left border-b">Message</th>
                    <th class="py-2 px-4 text-left border-b">Date Submitted</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $contact->name }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->message }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->created_at->format('M d, Y ') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection