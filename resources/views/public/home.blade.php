@extends('public.layout')

@section('content')
    <main class="relative w-full md:w-4/4 h-180">
        <livewire:public.banner.calling-banner />
    </main>
    </div>
    <div class="bg-white py-12">
        <div class="text-left px-6 md:px-36">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                Bringing Dreams To <span class="text-yellow-500">Reality</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600">
                We provide exceptional photography services that capture your moments beautifully.
            </p>
        </div>
    </div>

    <section id="gallery" class="py-10 bg-gray-200">
        @foreach ($categories as $item)
            <div class="gallery">
                <img src="{{ asset('images/' . $item->cat_image) }}" alt="{{ $item->cat_name }}">
            </div>
        @endforeach
    </section>


    <div class="py-8"></div>
    {{-- view button --}}


    <div class="text-center mt-5 flex item-center justify-center gap-1">
        <button class="bg-black text-yellow-500 px-6 py-2  hover:bg-yellow-600 transition duration-300">
            View All Services
        </button>
        <button class="bg-black text-yellow-500 px-3 py-1  hover:bg-yellow-600 transition duration-300">
            <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FAB005/long-arrow-right.png"
                alt="long-arrow-right" />
        </button>
    </div>
    </section>

    <section class="flex flex-col-reverse md:flex-row h-auto md:h-screen items-center justify-between bg-black mt-10">


        <div class="md:w-1/2 w-full px-6 md:px-12 text-left space-y-6">
            <h2 class="text-3xl md:text-5xl font-bold uppercase text-white">
                Who We <span class="text-yellow-500">Are?</span>
            </h2>
            <p class="text-md md:text-lg text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis,
                augue ut imperdiet ultricies, leo mauris rhoncus. Pellentesque convallis.
            </p>
            <a href="#"
                class="inline-flex items-center justify-center text-yellow-500 border border-yellow-400 px-4 py-2 md:px-6 md:py-3 rounded-lg hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out w-full md:w-auto">
                View All Services
                <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i>
            </a>
        </div>


        <div class="md:w-1/2 w-full h-64 md:h-full flex justify-center items-center">
            <img src="https://img.freepik.com/premium-photo/neonlit-woman-portriat_862994-2959.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                alt="Illustration Image" class="w-full h-full object-cover rounded-lg border border-white shadow-lg" />
        </div>
    </section>




    <div class="bg-white py-16">

        <div class="text-center px-6 md:px-36">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                PHOTOGRAPHY BY US <span class="text-yellow-500">PORTFOLIO</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8">
                We provide exceptional photography services that capture your moments beautifully.
            </p>


            <div class="flex flex-wrap justify-center gap-8">
                <a href="#" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    All
                </a>
                @foreach ($galleries as $item)
                    <div class="category-item">
                        <a href="#" class="text-lg text-yellow-500 hover:text-gray-800 transition">
                            {{ $item->gallery_title }}
                        </a>
                    </div>
                @endforeach
                <a href="#" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    Studio
                </a>
                <a href="#" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    Potraits
                </a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
        <!-- First Section: Show 2 Images -->
        @foreach ($galleries->take(2) as $item)
            <div class="bg-black flex items-center justify-center h-64 sm:h-80 overflow-hidden group relative rounded-lg shadow-lg">
                <img src="{{ asset('images/' . $item->images->first()->image_path) }}"
                    class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110 rounded-lg"
                    alt="{{ $item->gallery_title ?? 'Gallery image' }}" loading="lazy">
                <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    <p class="text-white text-lg sm:text-xl font-semibold">{{ $item->gallery_title ?? 'Models Pose' }}</p>
                </div>
            </div>
        @endforeach
    </div>
    
    <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4 max-w-5xl">
            <!-- Second Section: Skip 2, Take Next 4 Images -->
            @foreach ($galleries->skip(2)->take(4) as $item)
                <div>
                    <img src="{{ asset('images/' . $item->images->first()->image_path) }}" class="h-64 w-full object-cover"
                        alt="Image 1">
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="flex justify-center px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-screen-xl">
            <!-- Third Section: Skip 6, Take Next 3 Images -->
            @foreach ($galleries->skip(6)->take(3) as $item)
                <div>
                    <img src="{{ asset('images/' . $item->images->first()->image_path) }}" class="w-full h-64 object-cover"
                        alt="Image 1">
                </div>
            @endforeach
        </div>
    </div>
    
    <div class="py-12"></div>


    {{-- style="background-image: url('https://tse2.mm.bing.net/th?id=OIP.jt6i4yeTO_zMnivpc9nqXQHaEJ&pid=Api&P=0&h=180');"> --}}


    <div class="mb-6">
        <i class="bi bi-music-note-beamed text-7xl text-white"></i>
    </div>


    {{-- <div class="flex gap-4 mb-6">
        <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
            <i class="bi bi-star-fill text-2xl"></i>
        </a>
        <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
            <i class="bi bi-star-fill text-2xl"></i>
        </a>
        <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
            <i class="bi bi-star-fill text-2xl"></i>
        </a>
        <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
            <i class="bi bi-star-fill text-2xl"></i>
        </a>
        <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
            <i class="bi bi-star-fill text-2xl"></i>
        </a>
    </div> --}}


    <div class="text-white w-11/12 md:w-8/12">
        <p class="text-base md:text-xl font-bold">
            Experience the best photography in town.<br>
            Learn why capturing moments with your camera is essential today—not just for personal and professional
            growth, but for society as a whole.
        </p>
    </div>


    {{-- <h1 class="text-2xl text-yellow-500 mt-4">SADIQUE HUSSAIN</h1> --}}
    </div>
    <div class="w-full h-auto bg-cover bg-center relative mt-5 flex flex-col justify-center items-center text-center py-6 md:py-10"
        style="background-image: url('https://tse2.mm.bing.net/th?id=OIP.jt6i4yeTO_zMnivpc9nqXQHaEJ&pid=Api&P=0&h=180');">
        <div class="mb-4">
            <i class="bi bi-music-note-beamed text-4xl md:text-6xl text-white"></i>
        </div>
        <div class="flex gap-2 md:gap-3 mb-4">
            <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
                <i class="bi bi-star-fill text-lg md:text-xl"></i>
            </a>
            <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
                <i class="bi bi-star-fill text-lg md:text-xl"></i>
            </a>
            <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
                <i class="bi bi-star-fill text-lg md:text-xl"></i>
            </a>
            <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
                <i class="bi bi-star-fill text-lg md:text-xl"></i>
            </a>
            <a href="#" class="text-yellow-400 hover:text-gray-800 transition">
                <i class="bi bi-star-fill text-lg md:text-xl"></i>
            </a>
        </div>


        <div class="text-white w-11/12 md:w-8/12 px-4">
            <p class="text-sm md:text-base lg:text-lg font-medium leading-relaxed">
                Experience the best photography in town.<br>
                Capturing moments with your camera is essential—not just for personal growth, but for creating lasting
                memories.
            </p>
        </div>


        <h1 class="text-lg md:text-xl text-yellow-500 mt-3 font-semibold">
            SADIQUE HUSSAIN
        </h1>
    </div>


    <div class="py-12"></div>

    <div class="text-center px-6 md:px-36 py-10">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6 leading-tight">
            DISCOVER MORE ABOUT OUR<br>
            <span class="text-yellow-500">PHOTOGRAPHY</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-600 mb-8">
            Experience the best photography in town. <br>
            Discover the art of capturing moments with passion and precision.
        </p>
    </div>


    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8 py-10">
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://img.freepik.com/free-photo/young-beautiful-woman-portrait_23-2149263756.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_hybrid"
                alt="Professional Portraits" class="w-64 h-64 mb-4">
            <h3 class="text-2xl font-semibold text-black mb-2">Elevate Your Portraits</h3>
            <p class="text-gray-600 text-center mb-4">Experience the art of portrait photography, crafted to capture your
                essence and personality in every shot.</p>
            <p class="text-gray-600 text-left w-full">26 May 2023</p>
        </div>
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://img.freepik.com/free-photo/decorated-banquet-hall-with-flowers_8353-10058.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_hybrid"
                alt="Event Photography" class="w-64 h-64 mb-4">
            <h3 class="text-2xl font-semibold text-black mb-2">Mastering Photography Art</h3>
            <p class="text-gray-600 text-center mb-4">Capture your events with unparalleled expertise. Relive each
                memorable moment with our professional event coverage.</p>
            <p class="text-gray-600 text-left w-full">26 May 2023</p>
        </div>
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://img.freepik.com/free-photo/immersive-experience-concept-collage_23-2149498342.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_hybrid"
                alt="Landscape & Nature" class="w-64 h-64 mb-4">
            <h3 class="text-2xl font-semibold text-black mb-2">Capturing Moments</h3>
            <p class="text-gray-600 text-center mb-4">Explore nature’s beauty through stunning captures of landscapes and
                outdoor scenes, designed to inspire and captivate.</p>
            <p class="text-gray-600 text-left w-full">26 May 2023</p>
        </div>
    </div>
    <div class="py-10"></div>
@endsection
