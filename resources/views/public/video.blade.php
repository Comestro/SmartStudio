@extends('public.base')

@section('content')
    <div class="relative h-[120vh]">
        <video autoplay muted loop class="w-full h-full object-cover">
            <source src="https://videos.pexels.com/video-files/3888252/3888252-uhd_2732_1440_25fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center bg-black bg-opacity-50">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Capturing Your Most Precious <span
                    class="text-yellow-600">Moments</span></h1>
            <p class="text-lg md:text-xl mt-4 px-4 text-white">Are you planning a special event? <br> We will make it a part
                of the history.</p>
            <a href=""
                class="mt-6 bg-yellow-500 text-black font-semibold py-2 px-4 rounded hover:bg-yellow-400 transition">Explore
                Video</a>
        </div>
    </div>
    <div class="py-6"></div>
    <section id="gallery" class="py-16 bg-black">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">Our Video</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

              @foreach ($videoLatest as $item)
              <div class="relative group">
                
                <iframe  class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105" src="{{ str_replace('watch?v=', 'embed/', $item->link) }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                        {{ $item->title }}
                    </span>
                </div>
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    <span class="text-white text-lg font-bold">{{ $item->title }}</span>
                </div>
            </div>
              @endforeach

               
            </div>

        </div>
        </div>
    </section>
    <div class="bg-white py-6"></div>
    <section id="download-app" class="bg-black text-white py-16">
        <div class="container mx-auto text-center px-6">
            <h2 class="text-3xl font-bold mb-4 text-yellow-500">Download Our App</h2>
            <p class="text-lg mb-6">Get instant access to our services on your phone!</p>
            <a href="#"
                class="bg-yellow-500 text-black py-2 px-4 rounded font-semibold hover:bg-yellow-400 transition inline-flex items-center">
                <i class="bi bi-download mr-2"></i> Download Now
            </a>
        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8 py-10 bg-white">
        {{-- {{dd($data);}} --}}
        @foreach ($videos as $item)
            <div
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
                <iframe width="300" height="200" src="{{ str_replace('watch?v=', 'embed/', $item->link) }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3 class="text-2xl font-semibold text-black mb-2">{{ $item->title }}</h3>
                <p class="text-gray-600 text-center mb-4">{{ $item->description }}</p>
                <p class="text-gray-600 text-left w-full">{{ $item->created_at->format('d M Y, h:i A') }}</p>
            </div>
        @endforeach
        {{-- <div class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
                    <iframe width="300" height="200" src="https://www.youtube.com/embed/QEXSoF5TI5U?si=3Cptp4O8rZfRoCmb" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h3 class="text-2xl font-semibold text-black mb-2">Elevate Your Portraits</h3>
                    <p class="text-gray-600 text-center mb-4">Experience the art of portrait photography, crafted to capture your essence and personality in every shot.</p>
                    <p class="text-gray-600 text-left w-full">26 May 2023</p>
                </div>
                <div class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
                    <iframe width="300" height="200" src="https://www.youtube.com/embed/ShFHti2aAmY?si=QBKQXBXjWN3hSlKu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <h3 class="text-2xl font-semibold text-black mb-2">Elevate Your Portraits</h3>
                    <p class="text-gray-600 text-center mb-4">Experience the art of portrait photography, crafted to capture your essence and personality in every shot.</p>
                    <p class="text-gray-600 text-left w-full">26 May 2023</p>
                </div> --}}

    </div>
@endsection
