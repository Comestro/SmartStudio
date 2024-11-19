@extends('public.layout')

@section('content')
<header class="bg-gray-900 text-white py-3 px-4 fixed top-0 w-full z-10 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-3">
            <img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo"
                class="w-12 h-12 rounded-full">
            <a href="{{ route('home') }}" class="text-xl font-bold">Smart studio</a>
        </div>

        <nav class="hidden md:flex space-x-6">
            <a href="{{ route('home') }}" class="text-yellow-500">Home</a>
            <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
            <a href="{{ route('gallery') }}" class="hover:text-yellow-500">Gallery</a>
            <a href="{{ route('portfolio') }}" class="hover:text-yellow-500">Portfolio</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
        </nav>

        <div class="flex space-x-4">
            <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
                <i class="bi bi-facebook text-xl"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="hover:text-pink-500">
                <i class="bi bi-instagram text-xl"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                <i class="bi bi-twitter text-xl"></i>
            </a>
        </div>
    </div>
</header>
<main class="relative w-full md:w-4/4 ">
    <livewire:public.banner.calling-banner />
</main>
<style>
    .hidden {
        display: none;
    }

    .fixed {
        position: fixed;
    }

    .gallery-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .gallery-item {
        flex: 1;
        width: 80%;
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
        flex: 4;
    }

    @media (max-width: 768px) {
        .gallery-item {
            width: 40%;
        }
    }

    @media (max-width: 480px) {
        .gallery-item {
            width: 100%;
        }
    }

    header {
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        transform: translateY(-100%);
        opacity: 0;
    }

    header.visible {
        transform: translateY(0);
        opacity: 1;
    }
</style>
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
<section id="gallery" class="py-20 bg-gray-200">
    <div class="gallery-container px-10">
        @foreach ($categories->take(4) as $item)
        <div class="gallery-item">
            <img src="{{ asset('images/category/' . $item->cat_image) }}" alt="{{ $item->cat_name }}">
        </div>
        @endforeach
    </div>
</section>


<div class="py-8"></div>
{{-- view button --}}


<div class="text-center mt-5 flex item-center justify-center gap-1">
    <a href="{{ route('gallery') }}"
        class="bg-black text-yellow-500 px-6 py-2  hover:bg-yellow-600 transition duration-300">
        View All Services
    </a>
    <a href="{{route('gallery')}}">
        <button class="bg-black text-yellow-500 px-3 py-1  hover:bg-yellow-600 transition duration-300">
            <img width="30" height="30" src="https://img.icons8.com/ios-glyphs/30/FAB005/long-arrow-right.png"
                alt="long-arrow-right">
        </button>
    </a>
</div>
</section>

<section class="flex flex-col-reverse md:flex-row h-auto md:h-screen items-center justify-between bg-black mt-10">


    <div class="md:w-1/2 w-full px-6 md:px-12 text-left space-y-6 py-10">
        <h2 class="text-3xl md:text-5xl font-bold uppercase text-white">
            Who We <span class="text-yellow-500">Are?</span>
        </h2>
        <p class="text-md md:text-lg text-gray-400 ">
             SmartStudio: Where every moment is captured with creativity and precision. We specialize in transforming your cherished memories into timeless works of art. Experience photography that tells your unique story with style and elegance.
        </p>
        <a href="{{route('portfolio')}}"
            class="inline-flex items-center justify-center text-yellow-500 border border-yellow-400 px-4 py-2 md:px-6 md:py-3 rounded-lg hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out w-full md:w-auto ">
            View All Services
            <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i>
        </a>
    </div>


    <div class="md:w-1/2 w-full h-64 md:h-full flex justify-center items-center">
        <img src="https://img.freepik.com/premium-photo/neonlit-woman-portriat_862994-2959.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
            alt="Illustration Image" class="w-full h-full object-cover rounded-lg border border-white shadow-lg" />
    </div>
</section>




<!-- <div class="bg-white py">

     <div class="text-center px-6 md:px-36">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                PHOTOGRAPHY BY US <span class="text-yellow-500">PORTFOLIO</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8">
                We provide exceptional photography services that capture your moments beautifully.
            </p>


            <div class="flex flex-wrap justify-center gap-8">
                <a href="/" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    All
                </a>
                <form method="GET" action="{{ route('home') }}" class="flex flex-wrap justify-center gap-8">
                    @foreach ($categories->take(4) as $item)
                        <div class="category-item">
                            <a href="{{ route('home') }}?category_slug={{ $item->cat_slug }}"
                                class="text-lg text-yellow-500 hover:text-gray-800 transition {{ $item->cat_slug == $selectedCategorySlug ? 'font-bold' : '' }}">
                                {{ $item->cat_name }}
                            </a>
                        </div>
                    @endforeach
                </form>

            </div>
        </div> -->
<!-- </div> --> 

<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
    @foreach ($galleries->take(2) as $item)
    <div
        class="bg-black flex items-center justify-center h-64 sm:h-80 overflow-hidden group relative rounded-lg shadow-lg">
        <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
            class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110 rounded-lg"
            alt="{{ $item->gallery_title ?? 'Gallery image' }}" loading="lazy">
        <div
            class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
            <p class="text-white text-lg sm:text-xl font-semibold">{{ $item->gallery_title ?? 'Models Pose' }}</p>
        </div>
    </div>
    @endforeach
</div>
<div class="flex justify-center">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4 max-w-5xl">
        @foreach ($galleries->skip(2)->take(4) as $item)
        <div>
            <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}" class="h-64 w-full object-cover"
                alt="Image 1">
        </div>
        @endforeach
    </div>
</div>

<div class="flex justify-center px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-screen-xl">
        @foreach ($galleries->skip(6)->take(3) as $item)
        <div>
            <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}" class="w-full h-64 object-cover"
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
        SANTOSH KUMAR
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


<div class="p-4 sm:p-8 bg-gray-100">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://images.unsplash.com/photo-1523712999610-f77fbcfc3843?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Professional Portraits" class="w-full h-64 object-cover object-top rounded mb-4">
            <h3 class="text-xl sm:text-2xl font-semibold text-black mb-2 text-center">Elevate Your Portraits</h3>
            <p class="text-gray-600 text-center mb-4">Experience the art of portrait photography, crafted to capture
                your essence and personality in every shot.</p>
        </div>
        <!-- Card 2 -->
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://img.freepik.com/free-photo/decorated-banquet-hall-with-flowers_8353-10058.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_hybrid"
                alt="Event Photography" class="w-full h-64 object-cover rounded mb-4">
            <h3 class="text-xl sm:text-2xl font-semibold text-black mb-2 text-center">Mastering Photography Art</h3>
            <p class="text-gray-600 text-center mb-4">Capture your events with unparalleled expertise. Relive each
                memorable moment with our professional event coverage.</p>
        </div>
        <!-- Card 3 -->
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://img.freepik.com/free-photo/immersive-experience-concept-collage_23-2149498342.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_hybrid"
                alt="Landscape & Nature" class="w-full h-64 object-cover rounded mb-4">
            <h3 class="text-xl sm:text-2xl font-semibold text-black mb-2 text-center">Capturing Moments</h3>
            <p class="text-gray-600 text-center mb-4">Explore nature’s beauty through stunning captures of landscapes
                and outdoor scenes, designed to inspire and captivate.</p>
        </div>
    </div>
</div>


<a href="https://api.whatsapp.com/send?phone=+919472641988&text={{ urlencode('Hello,
I am interested in booking a photography session with your studio. Could you please let me know the availability.
Looking forward to your response.
Thank you!') }}"
    target="_blank"
    class="fixed md:bottom-10  bottom-20 right-2 md:right-10 z-20 group">
    <div class="flex items-center bg-green-500 rounded-full p-2 shadow-lg text-white hover:bg-green-600 transition-all duration-300">
        <div class="flex items-center justify-center w-12 h-12 bg-green-500 rounded-full group-hover:w-auto group-hover:px-4 transition-all duration-500">
            <i class="bi bi-whatsapp text-2xl"></i>
        </div>
        <span class="whatsapp-text ml-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500 transform translate-x-5 hidden group-hover:inline-block">
            WhatsApp Us
        </span>
    </div>
</a>

<!-- Popup Container -->
<!-- <div id="popup" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-0 z-50">
    <div class="flex justify-between items-center">
        <div class="relative bg-white rounded-lg opacity-40 shadow-lg p-6 w-96" style="opacity: 1;">
            <!-- Cancel Button -->
            <div class="flex justify-between items-center ">
                <h2 class="text-xl font-bold ">Welcome to Smart studio</h2>
                <button id="close-popup" class=" px-4 py-2 mb-2 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

            </div>
            </button>
            <p class="mb-4">We're glad to have you here. Explore our features and offerings.</p>

        </div>
    </div>
</div> 




<script>
    document.addEventListener("DOMContentLoaded", () => {
        const header = document.querySelector("header");
        const banner = document.querySelector("main");

        const observer = new IntersectionObserver(
            ([entry]) => {
                if (entry.isIntersecting) {
                    // Banner is in view, hide the header
                    header.classList.remove("visible");
                } else {
                    // Banner is out of view, show the header
                    header.classList.add("visible");
                }
            }, {
                root: null,
                threshold: 0
            } // Observes visibility threshold
        );

        observer.observe(banner);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const popup = document.getElementById('popup');
        const closePopup = document.getElementById('close-popup');

        // Show the popup on page load
        popup.classList.remove('hidden');

        // Close the popup when the button is clicked
        closePopup.addEventListener('click', function() {
            popup.classList.add('hidden');
        });
    });
</script>
@endsection