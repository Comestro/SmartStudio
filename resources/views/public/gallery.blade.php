@section('title','Gallery')
@extends('public.base')

@section('meta_description')
Explore the stunning gallery at Smart Studio. Our collection features breathtaking portraits, landscapes, and event photography. Dive into our visual world now.
@endsection

@section('content')
<style>
    .gallery-container {
        display: flex;
        gap: 20px;
        overflow-x: auto;
        padding-bottom: 10px;
        scrollbar-width: thin;
        scrollbar-color: #ccc transparent;
    }

    .gallery-container::-webkit-scrollbar {
        height: 8px;
    }

    .gallery-container::-webkit-scrollbar-thumb {
        background-color: #ccc;
        border-radius: 4px;
    }

    .gallery-item {
        flex: 0 0 calc(25% - 20px);
        max-width: calc(25% - 20px);
        height: 300px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: flex 0.3s ease, transform 0.3s ease;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover {
        flex: 0 0 calc(50% - 20px);
        transform: scale(1);
        z-index: 2;
    }

    @media (max-width: 768px) {
        .gallery-item {
            flex: 0 0 calc(50% - 20px);
            max-width: calc(50% - 20px);
        }

        .gallery-item:hover {
            flex: 0 0 calc(75% - 20px);
        }
    }

    @media (max-width: 480px) {
        .gallery-item {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .gallery-item:hover {
            flex: 0 0 100%;
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
        animation: auto-scroll 5s linear infinite;
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
            transform: translateX(-50%);
        }
    }
</style>

    <div class=" relative h-[80vh] bg-cover bg-center"
        style="background-image: url('https://th.bing.com/th/id/OIP.01e67CZXYANik5BUvlo0YgHaEJ?w=281&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7');">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-3xl md:text-5xl font-bold text-white">Capturning Your Most Presious <span
                    class="text-yellow-600">Moments</span></h1>
            <p class="text-lg md:text-xl mt-4 px-4 text-white">
                Are you planning a special event ?<br> We will make it a part of the history.
            </p>
            <a href=""
                class="mt-6 bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold py-2 px-4 rounded hover:bg-yellow-700 transition">
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
                    @foreach ($galleries as $item)
                    <div class="carousel-item flex-shrink-0 w-1/3 sm:w-1/2 md:w-1/3 lg:w-1/4 relative group">
                        @if ($item->images->first())
                            <a href="{{ route('gallery.viewGallery', $item->id) }}">
                                <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
                                    alt="{{ $item->gallery_title }}" class="w-full h-72 object-cover">
                            </a>
                        @else
                            <div class="w-full h-48 bg-gray-700 flex items-center justify-center text-white">No Image</div>
                        @endif
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
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
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($categories as $item)
                    <div class="relative group">
                        <img src="{{ asset('images/category/' . $item->cat_image) }}" alt="Gallery Image 1"
                            class="w-full h-64 object-cover rounded-lg shadow-md group-hover:filter-none filter grayscale transition-all duration-500 cursor-pointer image-item "onclick="openFullScreen(this)"/>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
    <img id="fullscreenImage" class="max-w-full max-h-full object-contain" style="width: 35rem; height:35rem" /> 
    <button id=""
        class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
        <i class="bi bi-x-circle-fill text-2xl text-white"></i>
    </button>
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
                class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold  text-white px-6 py-2 rounded-lg text-lg transition-all duration-300">
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


<script>
    function openFullScreen(imgElement) {
        const modal = document.getElementById('fullscreenModal');
        const fullScreenImage = document.getElementById('fullscreenImage');
        
     
        fullScreenImage.src = imgElement.src;

     
        modal.classList.remove('hidden');
        
        
        fullScreenImage.onload = function() {
          
            fullScreenImage.classList.add('max-w-full', 'max-h-full', 'object-contain');
        };

      
        modal.onclick = function() {
            modal.classList.add('hidden');
        };
    }
</script>




@endsection
