@extends('public.layout')

@section('content')
    <main class="relative w-full md:w-3/4 h-180">
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
        <div class="gallery">

            {{-- <img src="https://th.bing.com/th/id/OIP.FsKJMJ5OXmRhODA_kHR8pwHaLH?w=120&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" 
                    alt="Gallery Image 1"> --}}
            <img src="https://img.freepik.com/premium-photo/bride-poses-photo-front-flowers_896434-8.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                alt="Gallery Image 1">

            <img src="https://th.bing.com/th?id=OIP.FYHfXqNUP411-1ilLmzdpAHaEo&w=316&h=197&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2"
                alt="Gallery Image 2">

            <img src="https://img.freepik.com/free-photo/beautiful-blonde-woman-blue-light_23-2149478944.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                alt="Gallery Image 3">

            <img src="https://img.freepik.com/free-photo/portrait-beautiful-albino-woman-with-grapes_23-2150520256.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                alt="Gallery Image 4">
        </div>
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

    <div class="py-8"></div>

    <section class="flex flex-col md:flex-row h-screen items-center justify-between bg-black mt-10">

        <div class="md:w-1/2 px-8 md:px-12 text-left space-y-6">
            <h2 class="text-3xl md:text-5xl font-bold uppercase text-white">Who We <span class="text-yellow-500">Are?</span>
            </h2>
            <p class="text-md md:text-lg text-gray-400">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque convallis,
                augue ut imperdiet ultricies, leo mauris rhoncus. Pellentesque convallis.
            </p>

            <a href="#"
                class="inline-flex items-center text-yellow-500 border border-yellow-400 px-6 py-3 rounded-lg hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out">
                View All Services
                <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i>
            </a>

        </div>


        <div class="md:w-1/2 h-full flex justify-center items-center">
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
                <a href="#" class="text-lg text-yellow-500 hover:text-gray-800 transition">
                    Fashion
                </a>
                <a href="#" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    Lifestyle
                </a>
                <a href="#" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    Studio
                </a>
                <a href="#" class="text-lg text-gray-600 hover:text-yellow-500 transition">
                    Potraits
                </a>
            </div>
        </div>
    </div>

    <!-- <div class="grid grid-cols-1 sm:grid-cols-2  p-6">
        <div class="bg-black flex items-center justify-center h-80 mx-8">
            <img src="https://th.bing.com/th/id/OIP.XJl0C0wQ6h-YWKTW72_o7AHaEK?w=326&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                class="w-full max-w-lg h-full object-cover rounded-md shadow-lg" alt="Banner 1">
        </div>

        <div class="bg-black flex items-center justify-center h-80 mx-8">
            <img src="https://tse2.mm.bing.net/th?id=OIP.ZMsqpo3_Yo8e7m56hzXd-QHaEo&pid=Api&P=0&h=180"
                class="w-full max-w-lg h-full object-cover rounded-md shadow-lg" alt="Banner 2">
        </div>
    </div> -->


    <div class="grid grid-cols-1 sm:grid-cols-2 p-6">
        <div class="bg-black flex items-center justify-center h-80 mx-8 overflow-hidden group relative">
            <img src="https://th.bing.com/th/id/OIP.XJl0C0wQ6h-YWKTW72_o7AHaEK?w=326&h=183&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                class="w-full max-w-lg h-full object-cover rounded-md shadow-lg transform transition duration-500 group-hover:scale-110"
                alt="">

            <div
                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                <p class="text-white text-xl font-semibold">Models pose</p>
            </div>
        </div>
        <div class="bg-black flex items-center justify-center h-80 mx-8 overflow-hidden group relative">
            <img src="https://tse2.mm.bing.net/th?id=OIP.ZMsqpo3_Yo8e7m56hzXd-QHaEo&pid=Api&P=0&h=180"
                class="w-full max-w-lg h-full object-cover rounded-md shadow-lg transform transition duration-500 group-hover:scale-110"
                alt="">

            <div
                class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                <p class="text-white text-xl font-semibold">Modern Pose</p>
            </div>
        </div>
    </div>


    <div class="flex justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 p-4 max-w-5xl">
            <div>
                <img src="https://th.bing.com/th/id/OIP.FsKJMJ5OXmRhODA_kHR8pwHaLH?w=120&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="h-64 w-full object-cover " alt="Image 1">
            </div>
            <div>
                <img src="https://th.bing.com/th/id/OIP.MapmSqEQgoUb7p1RFUSkyQHaE7?w=252&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="h-64 w-full object-cover" alt="Image 2">
            </div>
            <div>
                <img src="https://th.bing.com/th/id/OIP.4kuSvAJOnbygGbY-ZlPLPwAAAA?w=115&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="h-64 w-full object-cover" alt="Image 3">
            </div>
            <div>
                <img src="https://th.bing.com/th/id/OIP.-5aryuaqCHhXSeu_dvIhOwHaES?w=323&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7"
                    class="h-64 w-full object-cover" alt="Image 4">
            </div>
        </div>
    </div>



    <div class="flex justify-center px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full max-w-screen-xl">
            <div>
                <img src="https://img.freepik.com/premium-photo/young-family-with-children-decorates-house-holiday-new-years-eve-waiting-new-year_494741-40092.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    class="w-full h-64 object-cover" alt="Image 1">
            </div>
            <div>
                <img src="https://img.freepik.com/free-photo/bride-groom-taste-red-wedding-cake-standing-before-altar-night_8353-7092.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    class="w-full h-64 object-cover" alt="Image 2">
            </div>
            <div>
                <img src="https://img.freepik.com/free-photo/little-girl-comes-bride-groom-with-wedding-rings-ceremony_8353-7086.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    class="w-full h-64 object-cover" alt="Image 3">
            </div>
        </div>
    </div>
    <div class="py-12"></div>

    <div class="h-[80vh] md:h-[60vh] bg-cover bg-center relative mt-5 flex flex-col justify-center items-center text-center"
        style="background-image: url('https://tse2.mm.bing.net/th?id=OIP.jt6i4yeTO_zMnivpc9nqXQHaEJ&pid=Api&P=0&h=180');">


        <div class="mb-6">
            <i class="bi bi-music-note-beamed text-7xl text-white"></i>
        </div>


        <div class="flex gap-4 mb-6">
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
        </div>


        <div class="text-white w-11/12 md:w-8/12">
            <p class="text-base md:text-xl font-bold">
                Experience the best photography in town.<br>
                Learn why capturing moments with your camera is essential today—not just for personal and professional
                growth, but for society as a whole.
            </p>
        </div>


        <h1 class="text-2xl text-yellow-500 mt-4">SADIQUE HUSSAIN</h1>
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
            <img src="https://tse2.mm.bing.net/th?id=OIP.zasFRqA9FJbykHr8EuisGAHaE8&pid=Api&P=0&h=180"
                alt="Professional Portraits" class="w-64 h-64 mb-4">
            <h3 class="text-2xl font-semibold text-black mb-2">Elevate Your Portraits</h3>
            <p class="text-gray-600 text-center mb-4">Experience the art of portrait photography, crafted to capture your
                essence and personality in every shot.</p>
            <p class="text-gray-600 text-left w-full">26 May 2023</p>
        </div>
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://tse4.mm.bing.net/th?id=OIP.2LiiB7vAx1aGwD7brcEf-AHaE8&pid=Api&P=0&h=180"
                alt="Event Photography" class="w-64 h-64 mb-4">
            <h3 class="text-2xl font-semibold text-black mb-2">Mastering Photography Art</h3>
            <p class="text-gray-600 text-center mb-4">Capture your events with unparalleled expertise. Relive each
                memorable moment with our professional event coverage.</p>
            <p class="text-gray-600 text-left w-full">26 May 2023</p>
        </div>
        <div
            class="flex flex-col items-center transform transition duration-300 hover:scale-105 hover:bg-gray-50 rounded-lg p-5 shadow-lg">
            <img src="https://tse1.mm.bing.net/th?id=OIP.-4-8BLVizbvY-gNrpGPsRAHaE3&pid=Api&P=0&h=180"
                alt="Landscape & Nature" class="w-64 h-64 mb-4">
            <h3 class="text-2xl font-semibold text-black mb-2">Capturing Moments</h3>
            <p class="text-gray-600 text-center mb-4">Explore nature’s beauty through stunning captures of landscapes and
                outdoor scenes, designed to inspire and captivate.</p>
            <p class="text-gray-600 text-left w-full">26 May 2023</p>
        </div>
    </div>
    <div class="py-6"></div>


    {{-- calender --}}
    <div class="flex justify-center">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-600">
            <iframe
                src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Asia%2FKolkata&showPrint=0&src=c2FyaXRhYWt1bWFyaTI0QGdtYWlsLmNvbQ&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&color=%23039BE5&color=%2333B679&color=%230B8043"
                style="border:solid 1px #777" width="600" height="400" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    <div class="py-6"></div>
@endsection
