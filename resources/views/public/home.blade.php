@section('title', 'SmartStudio')
@extends('public.layout')

@section('extra')
    <style>
        .scrollable-carousel {
            display: flex;
            overflow-x: auto;
            /* Enable horizontal scrolling */
            -webkit-overflow-scrolling: touch;
            /* Smooth scrolling on mobile */
            scrollbar-width: none;
            /* Hide scrollbar in Firefox */
            scroll-behavior: smooth;
            /* Enable smooth scrolling */
            scroll-snap-type: x mandatory;
            /* Ensure smooth snapping behavior */
        }

        /* Hide scrollbar in Webkit browsers (Chrome, Safari) */
        .scrollable-carousel::-webkit-scrollbar {
            display: none;
        }

        /* Snap each image to the center */
        .scrollable-carousel img {
            scroll-snap-align: center;
            /* Each image will snap to the center when scrolling */
        }
    </style>


@endsection
@section('content')

<header class="bg-gradient-to-b from-gray-900 to-black shadow-md text-white px-2 lg:px-4 fixed top-0 w-full z-10 ">
    <div class="container mx-auto flex items-center justify-between p-2 lg:p-4">
        <!-- Logo Section -->
        <div class="flex items-center space-x-3">
           <a href="{{ route('home') }}"><img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo" class="w-12 h-12 rounded-full"></a> 
            <a href="{{ route('home') }}" class=" text-md lg:text-xl font-bold">Smart Studio</a>
        </div>
    
        <!-- Hamburger Menu Button (Visible on small screens) -->
        <div class="md:hidden">
            <button id="menu-toggle" class="text-yellow-500 focus:outline-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>

            </button>
        </div>
    
        <!-- Navigation Links -->
        <nav id="menu" class="hidden md:flex md:space-x-4 font-semibold text-sm lg:text-lg">
            <a href="{{ route('home') }}" class="text-yellow-500">Home</a>
            <a href="{{ route('about') }}" class="hover:text-yellow-500">About</a>
            <a href="{{ route('gallery') }}" class="hover:text-yellow-500">Gallery</a>
            <a href="{{ route('portfolio') }}" class="hover:text-yellow-500">Portfolio</a>
            <a href="{{ route('contact') }}" class="hover:text-yellow-500">Contact</a>
            <a href="{{ route('budget.index') }}" class="hover:text-yellow-500">Budget</a>
            
        </nav>
    
        <!-- Social Icons -->
        <div class="hidden md:flex space-x-2">
            {{-- <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
                <i class="bi bi-facebook text-xl"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="hover:text-pink-500">
                <i class="bi bi-instagram text-xl"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                <i class="bi bi-twitter text-xl"></i>
            </a> --}}
            <a href="{{ route('category.view') }}">
                <button type="submit"
                        class="w-full px-2 py-2 text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                        Book Now
                </button>
            </a>

            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full px-2 py-2 text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                    Logout
                </button>
            </form>
            @endauth
            @guest
            <form action="{{ route('login') }}">
                @csrf
                <button type="submit"
                    class="w-full px-2 py-2 text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                    Login
                </button>
            </form>
            @endguest
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden flex flex-col  space-y-4 p-4 text-lg font-semibold">
        <a href="{{ route('home') }}" class="text-yellow-500 hover:text-white"> <i class="bi bi-house-fill"></i> Home</a>
            <a href="{{ route('portfolio') }}" class="text-yellow-500 hover:text-white"> <i class="bi bi-journal-medical"></i> Portfolio</a>
            <a href="{{ route('budget.index') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-cash-coin"></i> Budget</a>
            <a href="{{ route('gallery') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-images"></i> Gallery</a>
            <a href="{{ route('video') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-fast-forward-btn"></i> Video</a>
            <a href="{{ route('contact') }}" class="text-yellow-500 hover:text-white"><i class="bi bi-phone-vibrate-fill"></i> Contact</a>
            <a href="{{ route('about') }}" class="text-yellow-500 hover:text-white"> <i class="bi bi-person-circle"></i> About</a>
        
        <div class="flex flex-col space-y-4  mt-4">
            

            <a href="{{ route('category.view') }}"
            class=" w-48 py-2  block text-center text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
            Book Now
            </a>

            @auth
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-48 py-2  text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                    Logout
                </button>
            </form>
            @endauth
            @guest
            <form action="{{ route('login') }}">
                @csrf
                <button type="submit"
                    class="w-48 py-2  text-yellow-400 border border-yellow-400 rounded hover:bg-yellow-400 hover:text-white transition">
                    Login
                </button>
            </form>
            @endguest
            {{-- <a href="https://facebook.com" target="_blank" class="hover:text-blue-600">
                <i class="bi bi-facebook text-xl"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="hover:text-pink-500">
                <i class="bi bi-instagram text-xl"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="hover:text-blue-400">
                <i class="bi bi-twitter text-xl"></i>
            </a> --}}
        </div>
    </div>
    
    <!-- Script to Toggle Menu -->
    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const menu = document.getElementById('menu');
        const mobileMenu = document.getElementById('mobile-menu');
    
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
    
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
            transition: all 1s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 5s ease;
        }


        .gallery-item:hover {
            flex: 4;
        }

        @media (max-width: 768px) {
            .gallery-item {
                width: 70%;
                height: 300px;
            }
        }

        @media (max-width: 480px) {
            .gallery-item {
                width: 100%;
                height: 250px;
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
        #whatsapp {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
            transform: translateY(-100%);
            opacity: 0;
        }

        #whatsapp.visible {
            transform: translateY(0);
            opacity: 1;
        }
    </style>
    </div>
    <div class="bg-white py-12">
        <div class="text-left px-6 md:px-36">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">
                Bringing Dreams To <span class="text-yellow-500 text-4xl">Reality</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600">
                We provide exceptional photography services that capture your moments beautifully.
            </p>
        </div>
    </div>
    <section id="gallery" class="py-20 bg-gray-100">
        <div class="gallery-container px-10">
            @foreach ($categories->take(4) as $item)
                <div class="gallery-item">
                    <img src="{{ asset('images/category/' . $item->cat_image) }}" alt="{{ $item->cat_name }}">
                </div>
            @endforeach
        </div>
    </section>



    {{-- view button --}}


    <div class="text-center mt-10 flex item-center justify-center gap-1">
        <a href="{{ route('service') }}"
            class="bg-black text-yellow-500 px-6 py-2  hover:bg-yellow-600 transition duration-300">
            View All Services
        </a>
        <a href="{{ route('service') }}">
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
                SmartStudio: Where every moment is captured with creativity and precision. We specialize in transforming
                your cherished memories into timeless works of art. Experience photography that tells your unique story with
                style and elegance.
            </p>
            <a href="{{ route('about') }}"
                class="inline-flex items-center justify-center text-yellow-500 border border-yellow-400 px-4 py-2 md:px-6 md:py-3 rounded-lg hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out w-full md:w-auto ">
                View All Services
                <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i>
            </a>
        </div>


        <div class="md:w-1/2 w-full h-64 md:h-full flex justify-center items-center">
            <img src="https://img.freepik.com/premium-photo/neonlit-woman-portriat_862994-2959.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                alt="Illustration Image" class="w-full h-full object-cover  border border-white shadow-lg" />
        </div>
    </section>




    <div class="bg-white py-12">

        <div class="text-center px-6 md:px-36">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                PHOTOGRAPHY BY US <span class="text-yellow-500">PORTFOLIO</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-600 mb-8">
                We provide exceptional photography services that capture your moments beautifully.
            </p>


            <div class="flex flex-wrap justify-center gap-4 md:gap-8">
                <a href="{{ url('/') }}" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    All
                </a>
                <form method="GET" action="" class="flex flex-wrap justify-center gap-8">
                    @foreach ($categories->take(4) as $item)
                        <div class="category-item">
                            <a href="{{ url('/') }}?category_slug={{ $item->cat_slug }}"
                                class="text-lg text-yellow-500 hover:text-gray-800 transition {{ $item->cat_slug == $selectedCategorySlug ? 'font-bold' : '' }}">
                                {{ $item->cat_name }}
                            </a>
                        </div>
                    @endforeach
                </form>

            </div>
        </div>
    </div>



    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 p-6">
        @foreach ($galleries->take(2) as $item)
         <div
                class="bg-black flex items-center justify-center h-64 sm:h-80 overflow-hidden group relative rounded-lg shadow-lg" >
                <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
                    class="w-full h-full object-cover transform transition duration-500 group-hover:scale-110  rounded-lg cursor-pointer"onclick="openFullScreen(this)" 
                    alt="{{ $item->gallery_title ?? 'Gallery image' }}" loading="lazy">
                {{-- <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                    <p class="text-white text-lg sm:text-xl font-semibold">{{ $item->gallery_title ?? 'Models Pose' }}</p>
                </div> --}}
            </div>
        @endforeach
    </div>
    <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
        <img id="fullscreenImage" 
         class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
         alt="Fullscreen Image">
        
        <button id=""
            class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
            <i class="bi bi-x-circle-fill text-2xl text-white"></i>
        </button>
    </div>
    
    <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4 max-w-5xl">
            @foreach ($galleries->skip(2)->take(4) as $item)
                <div>
                    <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
                        class="h-64 w-full object-cover cursor-pointer"onclick="openFullScreen(this)" alt="Image 1">
                </div>
            @endforeach
        </div>
    </div>
    <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
        <img id="fullscreenImage" 
         class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
         alt="Fullscreen Image">
        
        <button id=""
            class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
            <i class="bi bi-x-circle-fill text-2xl text-white"></i>
        </button>
    </div>
    
    <div class="flex justify-center px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-screen-xl">
            @foreach ($galleries->skip(6)->take(3) as $item)
                <div>
                    <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
                        class="w-full h-64 object-cover cursor-pointer"onclick="openFullScreen(this)" alt="Image 1">
                </div>
            @endforeach
        </div>
    </div>
    <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
        <img id="fullscreenImage" 
         class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
         alt="Fullscreen Image">
        
        <button id=""
            class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
            <i class="bi bi-x-circle-fill text-2xl text-white"></i>
        </button>
    </div>


    {{-- style="background-image: url('https://tse2.mm.bing.net/th?id=OIP.jt6i4yeTO_zMnivpc9nqXQHaEJ&pid=Api&P=0&h=180');"> --}}






    <div class="w-full h-auto bg-cover bg-center relative mt-10 flex flex-col justify-center items-center text-center py-8 md:py-10"
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


    {{-- <div class="py-12"></div> --}}

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
        target="_blank" id="whatsapp" class="fixed md:bottom-10  bottom-20 right-2 md:right-10 z-20 group">
        <div
            class="flex items-center bg-green-500 rounded-full p-2 shadow-lg text-white hover:bg-green-600 transition-all duration-300">
            <div
                class="flex items-center justify-center w-12 h-12 bg-green-500 rounded-full group-hover:w-auto group-hover:px-4 transition-all duration-500">
                <i class="bi bi-whatsapp text-2xl"></i>
            </div>
            <span
                class="whatsapp-text ml-3 opacity-0 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-500 transform translate-x-5 hidden group-hover:inline-block">
                WhatsApp Us
            </span>
        </div>
    </a>

    <!-- Popup Container -->
    <!-- <div id="popup" class="hidden fixed inset-0 flex items-center justify-center bg-black bg-opacity-0 z-50">
            <div class="flex justify-between items-center">
                <div class="relative bg-white rounded-lg opacity-40 shadow-lg p-6 w-96" style="opacity: 1;">
                     Cancel Button -->
    <!--    <div class="flex justify-between items-center ">-->
    <!--        <h2 class="text-xl font-bold ">Welcome to Smart studio</h2>-->
    <!--        <button id="close-popup" class=" px-4 py-2 mb-2 rounded">-->
    <!--            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">-->
    <!--                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />-->
    <!--            </svg>-->

    <!--    </div>-->
    <!--    </button>-->
    <!--    <p class="mb-4">We're glad to have you here. Explore our features and offerings.</p>-->

    <!--</div>-->
    </div>
    </div>




    <script>
        const carousel = document.querySelector('.scrollable-carousel');
        if (carousel) {
            let isDown = false;
            let startX;
            let scrollLeft;

            carousel.addEventListener('mousedown', (e) => {
                isDown = true;
                carousel.classList.add('active');
                startX = e.pageX - carousel.offsetLeft;
                scrollLeft = carousel.scrollLeft;
            });

            carousel.addEventListener('mouseleave', () => {
                isDown = false;
                carousel.classList.remove('active');
            });

            carousel.addEventListener('mouseup', () => {
                isDown = false;
                carousel.classList.remove('active');
            });

            carousel.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - carousel.offsetLeft;
                const walk = (x - startX) * 3; // Scroll speed factor
                carousel.scrollLeft = scrollLeft - walk;
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            const header = document.querySelector("header");
            const whatsapp = document.getElementById("whatsapp");
            const banner = document.querySelector("main");

            const observer = new IntersectionObserver(
                ([entry]) => {
                    if (entry.isIntersecting) {
                        // Banner is in view, hide the header
                        header.classList.remove("visible");
                        whatsapp.classList.remove("visible");
                    } else {
                        // Banner is out of view, show the header
                        header.classList.add("visible");
                        whatsapp.classList.add("visible");
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
