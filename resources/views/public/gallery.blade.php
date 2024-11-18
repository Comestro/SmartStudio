@extends('public.base')

@section('content')
    </head>
    <style>
        .gallery {
            width: 85vw;
            height: 60vmin;
            display: flex;
            gap: 10px;
            margin: 0 auto;
        }

        .gallery img {
            height: 100%;
            flex: 1;
            object-fit: cover;
            overflow: hidden;
            cursor: pointer;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .gallery img:hover {
            flex: 4;
        }
    </style>

    <div class="h-[80vh] bg-cover bg-center"
        style="background-image: url('https://th.bing.com/th/id/OIP.01e67CZXYANik5BUvlo0YgHaEJ?w=281&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7');">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Capturning Your Most Presious <span
                    class="text-yellow-600">Moments</span></h1>
            <p class="text-lg md:text-xl mt-4 px-4 text-white">
                Are you planning a special event ?<br> We will make it a part of the history.
            </p>
            <a href=""
                class="mt-6 bg-yellow-500 text-black font-semibold py-2 px-4 rounded hover:bg-yellow-400 transition">
                Explore Gallery
            </a>
        </div>
    </div>

    <section id="gallery" class="py-16">
        <div class="container mx-auto px-6 lg:px-12">
            <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">Our Gallery</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($galleries as $item)
                    <div class="relative group">
                        @if ($item->images->first())
                            <a href="{{ route('gallery.viewGallery', $item->id) }}">
                                <img src="{{ asset('images/' . $item->images->first()->image_path) }}"
                                    alt="{{ $item->gallery_title }}" class="w-full h-48 object-cover">
                            </a>
                        @else
                            <div class="w-full h-48 bg-gray-700 flex items-center justify-center text-white">No Image</div>
                        @endif



                        <div class="absolute inset-0 flex items-center justify-center">
                            <span
                                class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                                {{ $item->gallery_title }}
                            </span>
                        </div>
                        <div
                            class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                            <span class="text-white text-lg font-bold">{{ $item->category->cat_name }}</span>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="relative group">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.ZHEaEn6yqgb76ySxdb3S6gHaE-&pid=Api&P=0&h=180"
                        alt="Gallery Image 2"
                        class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                            Natures
                        </span>
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-lg font-bold">Serenity</span>
                    </div>
                </div>


                <div class="relative group">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.BtNI9puHmT5TFEec4PKB4AHaE6&pid=Api&P=0&h=180"
                        alt="Gallery Image 3"
                        class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                            Sunset Bliss
                        </span>
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-lg font-bold">Golden Hour</span>
                    </div>
                </div>


                <div class="relative group">
                    <img src="https://img.freepik.com/free-photo/vertical-distant-shot-person-holding-umbrella-walking-footbridge-near-lighthouse_181624-2393.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                        alt="Gallery Image 4"
                        class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                            Beach Images
                        </span>
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-lg font-bold">Ocean Breeze</span>
                    </div>
                </div> --}}


                {{-- <div class="relative group">
                    <img src="https://img.freepik.com/premium-photo/close-up-red-flowering-plant_1048944-23926359.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                        alt="Gallery Image 5"
                        class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                            Flowers Images
                        </span>
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-lg font-bold">Blossom Beauty</span>
                    </div>
                </div>


                <div class="relative group">
                    <img src="https://img.freepik.com/free-photo/majestic-mausoleum-ancient-god-spiritual-journey-generated-by-ai_188544-11114.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                        alt="Gallery Image 6"
                        class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                            Taj Mahal
                        </span>
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-lg font-bold">Monument of Love</span>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section id="content-section" class="py-16">
        <div class="container mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center gap-12">

            <div class="lg:w-1/2">
                <img src="https://img.freepik.com/free-photo/pathway-leading-saint-peter-s-basilica-night-time_413556-113.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    alt="Main Image" class="w-full h-auto rounded-lg shadow-lg" />
            </div>

            <div class="lg:w-1/2">
                <h2 class="text-3xl font-bold text-yellow-500 mb-4">Meet the Photographer</h2>
                <p class="text-gray-700 leading-relaxed">
                    Each photograph captures not just a moment but a narrative. The photographer’s vision
                    brings life to landscapes and architecture, inviting viewers to explore the world with a new lens.
                </p>
                <p class="mt-4 text-gray-600">
                    From vibrant cityscapes to tranquil nature shots, every image reflects the photographer’s
                    dedication to storytelling. With attention to detail, light, and emotion, the work celebrates
                    the beauty in everyday moments.
                </p>
            </div>
        </div>


        <div class="container mx-auto mt-8 relative">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($categories as $item)
                    <div class="relative group">
                        <img src="{{ asset('images/' . $item->cat_image) }}" alt="Gallery Image 1"
                            class="w-full h-24 object-cover rounded-lg shadow-md" />
                    </div>
                @endforeach


                {{-- <div class="relative group">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.BtNI9puHmT5TFEec4PKB4AHaE6&pid=Api&P=0&h=180"
                        alt="Gallery Image 2" class="w-full h-24 object-cover rounded-lg shadow-md" />
                </div>

                <div class="relative group">
                    <img src="https://tse4.mm.bing.net/th?id=OIP.0_DkvHUdMfsJHif_IL9NpQHaFj&pid=Api&P=0&h=180"
                        alt="Gallery Image 3" class="w-full h-24 object-cover rounded-lg shadow-md" />
                </div>

                <div class="relative group">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.vA1AyyXVZGakpvyE2s8c6AHaEo&pid=Api&P=0&h=180"
                        alt="Gallery Image 4" class="w-full h-24 object-cover rounded-lg shadow-md" />
                </div> --}}
            </div>


            <button
                class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-yellow-500 text-white p-2 rounded-full shadow-lg hover:bg-yellow-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                </svg>
            </button>

            <button
                class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-yellow-500 text-white p-2 rounded-full shadow-lg hover:bg-yellow-600 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </section>




    <section id="gallery" class="py-16">
        <div class="container mx-auto px-6 lg:px-12">

            @if ($galleryFirst)
                <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">{{ $galleryFirst->gallery_title }}</h2>
                @foreach ($galleryFirst->images as $image)
                    <div class="gallery">

                        <img src="{{ asset('images/' . $image->image_path) }}" alt="Gallery Image 1">


                    </div>
                @endforeach
            @endif


        </div>
    </section>
    <div class="h-[80vh] bg-cover bg-center flex items-center justify-center text-white px-4"
        style="background-image: url('https://th.bing.com/th/id/OIP.NZ4lkEUp3MGsz0TRDxdPmgHaEl?w=311&h=193&c=7&r=0&o=5&dpr=1.3&pid=1.7');">

        <div class="text-center bg-black bg-opacity-50 p-8 rounded-lg max-w-xl w-full">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">Photographer's Gallery</h1>
            <p class="text-base md:text-lg mb-6">
                Explore the beauty captured through the lens. Dive into a world of moments and memories preserved
                forever.
            </p>
            <button
                class="bg-yellow-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg text-lg transition-all duration-300">
                Get in Touch
            </button>
        </div>
    </div>


    <section id="gallery" class="py-16">
        <div class="container mx-auto px-6 lg:px-12">
            @if ($galleryLast)
            <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">{{ $galleryLast->gallery_title }}</h2>
            @foreach ($galleryLast->images as $image)
                <div class="gallery">

                    <img src="{{ asset('images/' . $image->image_path) }}" alt="Gallery Image 1">


                </div>
            @endforeach
        @endif
        </div>
    </section>
@endsection
