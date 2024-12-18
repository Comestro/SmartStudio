 @extends('letter.layout.app')

@section('content')
    <div class="flex justify-center items-center min-h-screen">
        
    <button onclick="window.print()"
    class="print:hidden absolute bottom-4 right-4 bg-gradient-to-t from-yellow-400 via-yellow-300 to-yellow-200 text-black px-6 py-3 rounded-md hover:bg-yellow-600 transition duration-200">
    Print Letter Pad
</button> 


        <div class="w-[800px] bg-white shadow-lg relative overflow-hidden p-8">

            <div class="relative mb-8 bg-orange-500 h-40 w-full rounded-br-[50%]">

                <div class="absolute top-0 left-0 bg-gray-900 h-20 w-3/4 rounded-br-[50%]"></div>


                <div class="absolute top-6 left-8 text-white">
                    <h1 class="text-3xl font-extrabold">SMART STUDIO</h1>

                </div>

                <div class="absolute top-6 right-1 text-sm space-y-1 text-gray-100">
                    <p class="flex items-center space-x-2 hover:text-white transition">
                        <span>&#9742;</span>
                        <span>+91 9546784398</span>
                    </p>
                    <p class="flex items-center space-x-2 hover:text-white transition">
                        <span>&#9993;</span>
                        <span>smartstudio@gmail.com</span>
                    </p>
                </div>
            </div>



             <div class="border-b border-gray-700 pb-4 mb-6">
                <p class="text-lg text-black font-medium mb-1">
                    <span class="font-bold">To:</span> {{ $letterPad->name }}
                </p>
                <p class="text-lg text-black font-medium mb-1">
                    <span class="font-bold">Subject:</span> {{ $letterPad->subject }}
                </p>
                <p class="text-lg text-black font-medium">
                    <span class="font-bold">Address:</span> {{ $letterPad->address }}
                </p>
            </div>

            <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2 text-black"></h2>
                <p class="text-gray-700 leading-relaxed text-black">{!! $letterPad->body !!}</p>
            </div>


            @if ($letterPad->signature_image)
                <div class="mt-6">
                    <p class="text-xl font-semibold mb-2 text-black">Signature:</p>
                    <div class="flex items-center">
                        {{-- <div>
                            <p class="font-bold text-gray-900 text-lg">{{ $letterPad->name }}</p>
                            <img src="{{ asset('storage/' . $letterPad->signature_image) }}" alt="Signature"
                                class="rounded-lg shadow-md max-w-xs mt-2">
                        </div> --}}
                        <div>
                            <p class="font-bold text-gray-900 text-lg">{{ $letterPad->name }}</p>
                            <img src="{{ asset('storage/' . $letterPad->signature_image) }}" 
                                 alt="Signature"
                                 class="rounded-lg shadow-md w-40 h-20 mt-2 object-cover">
                        </div>
                        
                        
                    </div>
                </div>
            @endif



            <div class="relative mt-8">

                <div class="bg-orange-500 h-28 w-full rounded-tl-[50%]"></div>
                <div class="absolute bottom-0 right-0 bg-gray-900 h-20 w-3/4 rounded-tl-[50%]">
                    <div class="absolute top-6 right-8 text-white">
                        <p class="flex items-center space-x-2 hover:text-white transition">
                            <span>&#x1F310;</span>
                            <span><a href="https://smartstudiocreation.com" target="_blank"
                                    class="underline">smartstudiocreation.com</a></span>
                        </p>
    
                    </div>
                
                </div>
            </div>

        </div>
    </div>


 @endsection
 <style>
@media print {
    body {
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
    }

    .w-[800px] {
        padding: 20px;
        background: white;
        box-shadow: none;
        color: black;
    }

    .bg-orange-500 {
        background-color: #f97316 !important; 
    }

    .bg-gray-900 {
        background-color: #111827 !important; 
    }

  
    .print\:hidden {
        display: none !important;
    }
}
</style> 
