@extends('letter.layout.app')

@section('content')
    <div class="container mx-auto p-6 bg-gray-800">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-extrabold uppercase text-yellow-500 tracking-wide">Official Letter Pad</h1>
        </div>
        <div class="bg-gray-900 shadow-lg rounded-xl p-8">
            <h1 class="text-3xl font-semibold text-yellow-400 mb-6">{{ $letterPad->subject }}</h1>
            
            <div class="mb-6 border-b border-gray-700 pb-4">
                <p class="text-lg text-gray-300 font-medium mb-2">
                    <span class="font-bold text-yellow-400">To:</span> {{ $letterPad->name }}
                </p>
                <p class="text-lg text-gray-300 font-medium">
                    <span class="font-bold text-yellow-400">Address:</span> {{ $letterPad->address }}
                </p>
            </div>

            <div class="mb-8">
                <p class="text-xl font-semibold text-yellow-400 mb-4">Letter Body:</p>
                <div class="bg-gray-700 p-6 rounded-lg border border-gray-600 shadow-inner">
                    <p class="text-gray-100 leading-relaxed">{{ $letterPad->body }}</p>
                </div>
            </div>

            @if ($letterPad->signature_image)
                <div class="mt-6">
                    <p class="text-xl font-semibold text-yellow-400 mb-2">Signature:</p>
                    <div class="flex items-center">
                        <div>
                            <p class="font-bold text-white text-lg">{{ $letterPad->name }}</p>
                            <img src="{{ asset('storage/' . $letterPad->signature_image) }}" 
                                 alt="Signature" 
                                 class="rounded-lg shadow-md max-w-xs mt-2">
                        </div>
                    </div>
                </div>
            @endif

            <div class="mt-8 text-center">
                <a href="{{ route('letter.create') }}" 
                   class="inline-block text-lg font-medium bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black px-6 py-3 rounded-full transition duration-200 hover:from-yellow-300 hover:to-yellow-500">
                    Create New Letter Pad
                </a>
            </div>
        </div>
    </div>
@endsection
 