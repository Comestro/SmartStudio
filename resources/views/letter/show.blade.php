@extends('letter.layout.app')

@section('content')
<div class="flex justify-center items-center min-h-screen">
    <!-- Print Button -->
    <button onclick="window.print()" 
            class="print:hidden absolute bottom-4 right-4 bg-gradient-to-t from-yellow-400 via-yellow-300 to-yellow-200 text-black px-6 py-3 rounded-md hover:bg-yellow-600 transition duration-200">
        Print Letter Pad
    </button>

    <!-- Letterhead Container -->
    <div class="w-[800px] bg-white shadow-lg relative overflow-hidden p-8">
     
        <div class="relative mb-8">
            <div class="bg-orange-500 h-32 w-full rounded-br-[50%]"></div>
            <div class="absolute top-0 left-0 bg-gray-900 h-16 w-3/4 rounded-br-[50%]"></div>
            
            <div class="absolute top-4 left-8 text-white">
                <h1 class="text-3xl font-bold">SMART STUDIO</h1>
                <p class="text-sm"></p>
            </div>
          
            <div class="absolute top-8 right-8 text-gray-100 text-sm space-y-1">
                <p>&#9742; +919546784398</p>
                <p>&#9993; smartstudio@gmail.com</p>
                <p>&#x1F310; smartstudiocreation.com</p>
            </div>
        </div>

       
        <div class="border-b border-gray-700 pb-4 mb-6">
            <p class="text-lg text-black font-medium mb-2">
                <span class="font-bold">To:</span> {{ $letterPad->name }}
            </p>
            <p class="text-lg text-black font-medium mb-2">
                <span class="font-bold">Subject:</span> {{ $letterPad->subject }}
            </p>
            <p class="text-lg text-black font-medium">
                <span class="font-bold">Address:</span> {{ $letterPad->address }}
            </p>
        </div>

        <div class="mb-6">
            <h2 class="text-xl font-semibold mb-2 text-black">Letter Body:</h2>
            <p class="text-gray-700 leading-relaxed text-black">{!! $letterPad->body !!}</p>
        </div>

      
        @if ($letterPad->signature_image)
        <div class="mt-6">
            <p class="text-xl font-semibold mb-2 text-black">Signature:</p>
            <div class="flex items-center">
                <div>
                    <p class="font-bold text-gray-900 text-lg">{{ $letterPad->name }}</p>
                    <img src="{{ asset('storage/' . $letterPad->signature_image) }}" 
                         alt="Signature" 
                         class="rounded-lg shadow-md max-w-xs mt-2">
                </div>
            </div>
        </div>
        @endif

     
        <div class="relative mt-8">
            <div class="bg-orange-500 h-24 w-full rounded-tl-[50%]"></div>
            <div class="absolute bottom-0 right-0 bg-gray-900 h-16 w-3/4 rounded-tl-[50%]"></div>
        </div>
    </div>
</div>
@endsection

  <style>
@media print {
    .print\\:hidden {
        display: none !important;
    }
    .w-[800px] {
        padding: 20px;
        background: white;
        box-shadow: none;
        color: black;
    }
    .bg-orange-500, .bg-gray-900 {
        display: block;
    }
}
</style> 