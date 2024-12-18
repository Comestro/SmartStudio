@section('title', 'Portfolio | SmartStudio')
@extends('public.base')

@section('meta_description')
Explore the comprehensive portfolio of Smart Studio.Our work includes portraits, events and commercial photography.See our artistry in action.
@endsection
@section('content')
    <style>
        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        /* .carousel-item {
            position: relative;
            min-width: 33.33%;
            
            transition: transform 0.3s ease;
        } */

        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-item:focus-within .view-more-btn {
            opacity: 1;
        }

        .text-overlay {
                position: absolute;
                bottom: 0;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                padding: 1rem;
                text-align: center;
            }

        

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }


        .scrollbar-hide {
            scrollbar-width: none;
        }

        body {
                background: url('./images/static/background.png') repeat;
                animation: moveBackground 30s linear infinite;
            }

        @keyframes moveBackground {
            0% {
                background-position: 0 0;
            }

            100% {
                background-position: 1050px 0;
            }
        }

        .animate-fadeIn {
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        .animate-fadeInSlow {
            animation: fadeIn 2s ease-in-out forwards;
        }

        /* Gradient animation moving horizontally */
        */ .animate-gradientX {
            background-size: 200% 200%;
            animation: gradientX 3s ease infinite;
        }

        /* Keyframes for animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes gradientX {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }
    </style>


    <body class="">



        {{-- background image --}}
        <div class="w-full h-80 md:h-screen bg-cover bg-no-repeat relative flex items-center justify-center mt-20 "
            style="background-image: url('./images/static/studio-bg.jpg');"
            id="Home">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center animate-fadeIn">
                <h1
                    class="text-4xl md:text-6xl font-extrabold  bg-gradient-to-r from-white via-yellow-200 to-yellow-500  text-transparent bg-clip-text animate-gradientX drop-shadow-xl shadow-[#ffd700] duration-700 ease-in-out">
                    Capturning Moments </h1>
                <p class="text-lg md:text-xl mt-3 px-3 text-white">
                    “Turning life’s precious moments into timeless memories”
                </p>

            </div>


        </div>

        {{-- about --}}

        <div class=" shadow-lg rounded-lg overflow-hidden w-full mb-10 mt-10 mx-auto lg:flex lg:items-center" id="About">

            <div class="p-8 lg:w-1/2">
                <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">About Me
                </h3>
                <h1 class="text-4xl font-bold text-white mt-4">Read More About Me</h1>
                <p class="text-white mt-4">
                    Welcome to Smart Studio, where your moments become timeless memories. With years of experience and a passion for photography, we capture the essence of each moment, telling stories that will be cherished forever.
                </p>
                <p class="text-white mt-4">
                    Our services include wedding, portrait, event, commercial, and landscape photography. We create stunning visuals that reflect unique beauty and emotion, ensuring every click preserves the essence of the present for future generations.
                </p>

            </div>


            <div class="lg:w-1/2 flex items-center justify-center p-4 relative">

                <img src="{{asset('./images/static/studio-bg.jpg')}}" alt=""
                    class="relative w-full h-auto border-b-8 border-r-8 border-yellow-500 max-h-[40rem] object-cover  shadow-lg">
            </div>

        </div>

        {{-- service --}}

        <div class="p-8 w-full md:w-1/2" id="Service">
            <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">My Services</h3>
            <h1 class="text-4xl font-bold text-white mt-4">What Kinds of Work I Do?</h1>
        </div>

        <div class="carousel w-full overflow-x-scroll flex snap-x snap-mandatory gap-2 scrollbar-hide">

            @foreach ($categories as $item)
                <div tabindex="0"
                    class="carousel-item snap-center h-80 sm:h-96 bg-cover bg-center relative focus:outline-none lg:min-w-[33.33%] md:min-w-[50%]  min-w-full">
                    <img src="{{ asset('images/category/' . $item->cat_image) }}"class="cursor-pointer"onclick="openFullScreen(this)" alt="">
                    <div class="text-overlay">
                        <h2 class="text-lg font-bold uppercase">{{$item->cat_name}}</h2>
                        {{-- <p class="uppercase">Royalty / Wedding</p> --}}
                    </div>
                    
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
    

        {{-- latest work --}}
        <div class="p-8 w-full md:w-1/2" id="Work">
            <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">My Work</h3>
            <h1 class="text-4xl font-bold text-white mt-4">My Recent Work</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4 px-4 mb-5">
            @if($galleryImages->count() > 0)
                <div class="lg:col-span-2">
                    <img src="{{ asset('images/gallery/' . $galleryImages->first()->image_path) }}" 
                         alt="{{ $galleryImages->first()->gallery->gallery_title ?? 'Gallery Image' }}" 
                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer"onclick="openFullScreen(this)">
                </div>
            @endif
            <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
                <img id="fullscreenImage" 
                 class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
                 alt="Fullscreen Image">
                
                <button id=""
                    class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <i class="bi bi-x-circle-fill text-2xl text-white"></i>
                </button>
            </div>
            

        
            @if($galleryImages->skip(1)->first())
                <div class="lg:col-span-2 row-span-2">
                    <img src="{{ asset('images/gallery/' . $galleryImages->skip(1)->first()->image_path) }}" 
                         alt="{{ $galleryImages->skip(1)->first()->gallery->gallery_title ?? 'Gallery Image' }}" 
                         class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer"onclick="openFullScreen(this)">
                </div>
            @endif
            <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
                <img id="fullscreenImage" 
                 class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
                 alt="Fullscreen Image">
                
                <button id=""
                    class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <i class="bi bi-x-circle-fill text-2xl text-white"></i>
                </button>
            </div>
            @if($galleryImages->skip(2)->count() >= 2)
                <div class="hidden lg:grid grid-rows-2 gap-4">
                    @foreach($galleryImages->skip(2)->take(2) as $image)
                        <div class="h-auto">
                            <img src="{{ asset('images/gallery/' . $image->image_path) }}" 
                                 alt="{{ $image->gallery->gallery_title ?? 'Gallery Image' }}" 
                                 class="w-full h-full object-cover rounded-lg shadow-lg cursor-pointer"onclick="openFullScreen(this)">
                        </div>
                    @endforeach
                </div>
            @endif
            <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
                <img id="fullscreenImage" 
                 class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
                 alt="Fullscreen Image">
                
                <button id=""
                    class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <i class="bi bi-x-circle-fill text-2xl text-white"></i>
                </button>
            </div>
        
            @foreach($galleryImages->skip(4)->take(3) as $image)
                <div class="lg:col-span-1">
                    <img src="{{ asset('images/gallery/' . $image->image_path) }}" 
                         alt="{{ $image->gallery->gallery_title ?? 'Gallery Image' }}" 
                         class="w-full h-48 object-cover rounded-lg shadow-lg cursor-pointer"onclick="openFullScreen(this)">
                </div>
            @endforeach
            <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
                <img id="fullscreenImage" 
                 class="w-[50rem] h-[30rem] object-cover rounded-lg px-4" 
                 alt="Fullscreen Image">
                
                <button id=""
                    class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <i class="bi bi-x-circle-fill text-2xl text-white"></i>
                </button>
            </div>
        </div>
        


        {{-- contact --}}

        {{-- <div class="p-8 w-full md:w-1/2" id="Work">
            <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">Contact</h3>
            <h1 class="text-4xl font-bold text-white mt-4">Contact With Me</h1>
        </div>

        <div class="flex flex-col items-center justify-center py-16 px-4" id="">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-full max-w-7xl">
                <div>
                    <img src="./images/studio-bg.jpg" class="border-b-8 border-l-8 border-yellow-500 shadow-lg"
                        alt="">
                </div>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <input type="text" placeholder="Your Name"
                            class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <input type="email" placeholder="Your Email"
                            class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <input type="text" placeholder="Your Phone"
                            class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        <input type="text" placeholder="Subject"
                            class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                    </div>
                    <textarea placeholder="Write your message here"
                        class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                    <button type="submit"
                        class="w-full py-4 bg-gradient-to-r from-yellow-500 to-white font-semibold rounded-lg text-black">Submit
                        Now</button>
                </form>
            </div>
        </div> --}}
    @endsection
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
    