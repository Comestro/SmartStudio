@extends('public.base')

@section('content')
    <style>
        .roboto-medium {
            font-family: "Roboto", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .carousel-item {
            position: relative;
            min-width: 33.33%;
            /* Show 3 images at a time */
            transition: transform 0.3s ease;
        }

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

        .view-more-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            color: #000;
            padding: 0.5rem 1rem;
            border-radius: 0.5rem;
            font-weight: bold;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }


        .scrollbar-hide {
            scrollbar-width: none;
        }

        body {
            background: url('./images/background.png') repeat;
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
        .animate-gradientX {
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


    <body class="bg-black roboto-medium">

        <!-- <div class="absolute top-0 left-0 right-0 w-full h-20 px-4 z-10 ">
        <div class="h-full mx-auto py-1 px-6 font-titleFont flex items-center justify-between">
         
            <div class="flex items-center">
                <img src="./images/letter-s.png" alt="S" class="w-10 h-10">
            </div>

            <nav class="hidden lg:flex lg:pr-32 w-full justify-end">
                <ul class="flex items-center gap-8 text-[#fff]">
                    <li>
                        <a href="#Home" class="font-bold flex items-center gap-1 relative text-[#fff] hover:text-[#ffd700] hover:after:w-full after:absolute after:bg-[#ffd700] after:h-[4.5px] after:w-0 after:left-0 after:bottom-[-8px] after:duration-500 after:rounded-full">
                            <img width="24" height="24" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/home.png" alt="home"/>Home
                        </a>
                    </li>
                    <li>
                        <a href="#About" class="font-bold flex items-center gap-1 relative text-[#fff] hover:text-[#ffd700] hover:after:w-full after:absolute after:bg-[#ffd700] after:h-[4.5px] after:w-0 after:left-0 after:bottom-[-8px] after:duration-500 after:rounded-full">
                            <img width="24" height="24" src="https://img.icons8.com/forma-thin-filled/24/FFFFFF/person-male.png" alt="person-male"/>About
                        </a>
                    </li>
                    <li>
                        <a href="#Service" class="font-bold flex items-center gap-1 relative text-[#fff] hover:text-[#ffd700] hover:after:w-full after:absolute after:bg-[#ffd700] after:h-[4.5px] after:w-0 after:left-0 after:bottom-[-8px] after:duration-500 after:rounded-full">
                          <img width="24" height="24" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/conference-call--v1.png" alt="conference-call--v1"/>Service
                        </a>
                    </li>
                    <li>
                        <a href="#Work" class="font-bold flex items-center gap-1 relative text-[#fff] hover:text-[#ffd700] hover:after:w-full after:absolute after:bg-[#ffd700] after:h-[4.5px] after:w-0 after:left-0 after:bottom-[-8px] after:duration-500 after:rounded-full">
                          <img width="24" height="24" src="https://img.icons8.com/external-ddara-fill-ddara/64/FFFFFF/external-cameraman-professions-ddara-fill-ddara.png" alt="external-cameraman-professions-ddara-fill-ddara"/>Work
                        </a>
                    </li>
                    <li>
                        <a href="#Contact" class="font-bold flex items-center gap-1 relative text-[#fff] hover:text-[#ffd700] hover:after:w-full after:absolute after:bg-[#ffd700] after:h-[4.5px] after:w-0 after:left-0 after:bottom-[-8px] after:duration-500 after:rounded-full">
                          <img width="24" height="24" src="https://img.icons8.com/ios-glyphs/30/FFFFFF/ringer-volume.png" alt="ringer-volume"/>Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div> -->






        {{-- background image --}}
        <div class="w-full h-screen bg-cover bg-no-repeat relative flex items-center justify-center"
            style="background-image: url('./images/studio-bg.jpg');" id="Home">
            <div class="absolute inset-0 bg-black opacity-60"></div>
            <div class="relative z-10 text-center text-white px-4 animate-fadeIn">
                <h1
                    class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold leading-tight mb-4 bg-gradient-to-r from-white via-yellow-200 to-yellow-500 text-transparent bg-clip-text animate-gradientX drop-shadow-xl shadow-[#ffd700] duration-700 ease-in-out">
                    Capturing Moments
                </h1>
                <p class="text-sm sm:text-lg md:text-xl text-gray-300 max-w-md mx-auto italic animate-fadeInSlow">
                    “Turning life’s precious moments into timeless memories”
                </p>
            </div>


        </div>




        {{-- about --}}

        <div class=" shadow-lg rounded-lg overflow-hidden w-full mb-10 mt-10 mx-auto lg:flex lg:items-center"
            id="About">

            <div class="p-8 lg:w-1/2">
                <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">About Me
                </h3>
                <h1 class="text-4xl font-bold text-white mt-4">Read More About Me</h1>
                <p class="text-white mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint excepturi animi eos numquam, asperiores
                    quaerat? Quidem est qui ducimus incidunt.
                </p>
                <p class="text-white mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore ipsa, quae facilis, quis velit deserunt
                    beatae vel est ad natus obcaecati illo. Reprehenderit, dicta. Numquam sequi, ipsa saepe eveniet libero
                    nihil aliquam ullam porro.
                </p>

            </div>


            <div class="lg:w-1/2 flex items-center justify-center p-4 relative">

                <img src="./images/studio-bg.jpg" alt=""
                    class="relative w-full h-auto border-b-8 border-r-8 border-yellow-500 max-h-[40rem] object-cover  shadow-lg">
            </div>

        </div>

        {{-- service --}}

        <div class="p-8 w-full md:w-1/2" id="Service">
            <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">My Services</h3>
            <h1 class="text-4xl font-bold text-white mt-4">What Kinds of Work I Do?</h1>
        </div>

        <div class="carousel w-full overflow-x-scroll flex snap-x snap-mandatory gap-2 scrollbar-hide">

            <div tabindex="0"
                class="carousel-item snap-center h-80 sm:h-96 bg-cover bg-center relative focus:outline-none lg:min-w-[33.33%] md:min-w-[50%] min-w-full">
                <img src="./images/wedding.webp" alt="">
                <div class="text-overlay">
                    <h2 class="text-lg font-bold uppercase">Wedding</h2>
                    <p class="uppercase">Royalty / Wedding</p>
                </div>
                <button class="view-more-btn">View More</button>
            </div>

            <div tabindex="0"
                class="carousel-item snap-center h-80 sm:h-96 bg-cover bg-center relative focus:outline-none lg:min-w-[33.33%] md:min-w-[50%] min-w-full">
                <img src="./images/studio-bg.jpg" alt="">
                <div class="text-overlay">
                    <h2 class="text-lg font-bold">Models</h2>
                    <p class="uppercase">BEAUTY / FASHION</p>
                </div>
                <button class="view-more-btn">View More</button>
            </div>

            <div tabindex="0"
                class="carousel-item snap-center h-80 sm:h-96 bg-cover bg-center relative focus:outline-none lg:min-w-[33.33%] md:min-w-[50%] min-w-full">
                <img src="./images/aesthetic.webp" alt="">
                <div class="text-overlay">
                    <h2 class="text-lg font-bold">Nature</h2>
                    <p class="uppercase">Nature / Travel</p>
                </div>
                <button class="view-more-btn">View More</button>
            </div>

            <div tabindex="0"
                class="carousel-item snap-center h-80 sm:h-96 bg-cover bg-center relative focus:outline-none lg:min-w-[33.33%] md:min-w-[50%] min-w-full">
                <img src="./images/studio-bg.jpg" alt="">
                <div class="text-overlay">
                    <h2 class="text-lg font-bold">NEW AGE FASHION</h2>
                    <p class="uppercase">INNOVATION / STYLE</p>
                </div>
                <button class="view-more-btn">View More</button>
            </div>

            <div tabindex="0"
                class="carousel-item snap-center h-80 sm:h-96 bg-cover bg-center relative focus:outline-none lg:min-w-[33.33%] md:min-w-[50%] min-w-full">
                <img src="./images/studio-bg.jpg" alt="">
                <div class="text-overlay">
                    <h2 class="text-lg font-bold">NEW AGE FASHION</h2>
                    <p class="uppercase">INNOVATION / STYLE</p>
                </div>
                <button class="view-more-btn">View More</button>
            </div>
        </div>

        {{-- latest work --}}
        <div class="p-8 w-full md:w-1/2" id="Work">
            <h3 class="text-yellow-400 uppercase tracking-widest text-xl border-b-2 border-yellow-300 pb-2">My Work</h3>
            <h1 class="text-4xl font-bold text-white mt-4">My Recent Work</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="lg:col-span-2">
                <img src="./images/aesthetic-2.jpg" alt=""
                    class="w-full h-full object-cover rounded-lg shadow-lg">
            </div>
            <div class="lg:col-span-2 row-span-2">
                <img src="./images/wedding.webp" alt="" class="w-full h-full object-cover rounded-lg shadow-lg">
            </div>
            <div class="hidden lg:grid grid-rows-2 gap-4">
                <div class="h-52">
                    <img src="./images/studio-bg.jpg" alt=""
                        class="w-full h-full object-cover rounded-lg shadow-lg">
                </div>
                <div class="h-52">
                    <img src="./images/studio-bg.jpg" alt=""
                        class="w-full h-full object-cover rounded-lg shadow-lg">
                </div>
            </div>
            <div class="lg:col-span-1">
                <img src="./images/jar.jpg" alt="" class="w-full h-40 object-cover rounded-lg shadow-lg">
            </div>
            <div class="lg:col-span-1">
                <img src="./images/aesthetic.webp" alt="" class="w-full h-40 object-cover rounded-lg shadow-lg">
            </div>
            <div class="lg:col-span-1">
                <img src="./images/aesthetic.webp" alt="" class="w-full h-40 object-cover rounded-lg shadow-lg">
            </div>


        </div>


        {{-- contact --}}

        <div class="p-8 w-full md:w-1/2" id="Work">
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
        </div>
    @endsection
