@extends('admin.adminBase')

@section('content')
<div class="w-full h-auto">
    <div class="flex flex-col items-center min-h-screen  p-8">
       
        <div class="w-full max-w-5xl mb-6">
            <div class="flex justify-between items-center bg-gradient-to-r from-yellow-100 to-yellow-500 text-white p-4 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-black">Contact List</h2>
            </div>
        </div>

    
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-5xl">
        @foreach ($contacts as $contact)
            <div class="bg-gradient-to-t from-yellow-200 to-white p-6 rounded-lg shadow-lg flex flex-col transition-transform transform hover:scale-105 hover:shadow-2xl">
                <h3 class="mt-4 text-lg font-semibold text-gray-800"> <i class="bi bi-dot text-black"></i>Name:  {{$contact->name}}</h3><br>
                <p class="text-gray-700"><i class="bi bi-dot text-black"></i>Email: {{$contact->email}}</p><br>
                <p class="text-gray-700"><i class="bi bi-dot text-black"></i>Contact: {{$contact->phone_no}}</p><br>
                <p class="text-gray-700"><i class="bi bi-dot text-black"></i>Message: {{$contact->message}}</p><br>
                
            
                <div class="mt-4 flex space-x-4">
                    <button class="text-blue-500 hover:text-blue-700">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    {{-- <button class="text-red-500 hover:text-red-700">
                        <i class="bi bi-trash"></i>
                    </button> --}}
                </div>
                @endforeach
            </div>
    
        </div>
    </div>
</div>
@endsection
