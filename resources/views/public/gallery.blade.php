@section('title','Gallery')
@extends('public.base')

@section('content')
<style>
    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .gallery-item {
        flex: 1 1 calc(33.33% - 20px); 
        max-width: calc(33.33% - 20px);
        height: 400px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.3s ease;
    }

    .gallery-item:hover {
        flex:4;
    }

    @media (max-width: 768px) {
        .gallery-item {
            flex: 1 1 calc(50% - 20px); 
            max-width: calc(50% - 20px);
        }
    }

    @media (max-width: 480px) {
        .gallery-item {
            flex: 1 1 100%; 
            max-width: 100%;
        }
    }
</style>
<style>
    .carousel {
        position: relative;
        width: 100%;
    }

    .carousel-track {
        display: flex;
        animation: auto-scroll 10s linear infinite;
    }

    .carousel-item {
        flex-shrink: 0;
        width: calc(100% / 3);
    }

    @media (max-width: 1024px) {
        .carousel-item {
            width: calc(100% / 2); 
        }
    }

    @media (max-width: 640px) {
        .carousel-item {
            width: 100%;
        }
    }

    @keyframes auto-scroll {
        0% {
            transform: translateX(0%);
        }
        100% {
            transform: translateX(-100%);
        }
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
            <div class="carousel w-full overflow-hidden flex gap-2 relative">
            <div class="carousel-track flex transition-transform duration-700 ease-linear">
                @foreach ($galleries as $item)
                    <div class=" carousel-item flex-shrink-0 w-1/3 sm:w-1/2 md:w-1/3 lg:w-1/4 relative group">
                        @if ($item->images->first())
                            <a href="{{ route('gallery.viewGallery', $item->id) }}">
                                <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
                                    alt="{{ $item->gallery_title }}" class="w-full h-72 object-cover">
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
             </div>
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
                        <img src="{{ asset('images/category/' . $item->cat_image) }}" alt="Gallery Image 1"
                            class="w-full h-64 object-cover rounded-lg shadow-md" />
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


            <!-- <button
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
            </button> -->
        </div>
    </section>


    <section id="gallery" class="py-16">
    <div class="container mx-auto px-6 lg:px-12">

        @if ($galleryFirst)
            <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">{{ $galleryFirst->gallery_title }}</h2>
            <div class="gallery-container">
                @foreach ($galleryFirst->images as $image)
                <div class="gallery-item">
                    <img src="{{ asset('images/gallery/' . $image->image_path) }}" alt="Gallery Image">
                    </div>
                @endforeach
            </div>
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
        <div class="gallery-container">
            @foreach ($galleryLast->images as $image)
            <div class="gallery-item">
                <img src="{{ asset('images/gallery/' . $image->image_path) }}" alt="Gallery Image">
            </div>
            @endforeach
        </div>
        @endif
    </div>
</section>


@endsection
