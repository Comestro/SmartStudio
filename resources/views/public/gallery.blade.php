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
<body class="bg-black roboto-medium">
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

                <div class="relative group">
                    <img src="https://img.freepik.com/premium-photo/quottranquil-riverside-ponderingquot_1168612-161335.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                        alt="Gallery Image 1"
                        class="w-full h-72 object-cover rounded-lg shadow-lg transition duration-300 group-hover:scale-105">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <span
                            class="text-white text-lg font-bold transition-opacity duration-300 group-hover:opacity-0">
                            Beautiful Scenery
                        </span>
                    </div>
                    <div
                        class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                        <span class="text-white text-lg font-bold">Stunning View</span>
                    </div>
                </div>


                <div class="relative group">
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
                </div>


                <div class="relative group">
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
                </div>
            </div>
        </div>
    </section>
    <section id="content-section" class="py-16">
        <div class="container mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center gap-12">

            <div class="lg:w-1/2">
                <img src="https://img.freepik.com/free-photo/pathway-leading-saint-peter-s-basilica-night-time_413556-113.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip" alt="Main Image"
                    class="w-full h-auto rounded-lg shadow-lg" />
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
                <div class="relative group">
                    <img src="https://th.bing.com/th/id/OIP.MYBXwqjBG1K3zIggNQN53QHaEK?w=334&h=187&c=7&r=0"
                        alt="Gallery Image 1" class="w-full h-24 object-cover rounded-lg shadow-md" />
                </div>

                <div class="relative group">
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
                </div>
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
            <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">MODELS IMAGES</h2>

            <div class="gallery">

                <img src="https://img.freepik.com/free-photo/happy-attractive-woman-smiling_23-2147651996.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    alt="Gallery Image 1">

                <img src="https://img.freepik.com/free-photo/cheerful-woman-dress-near-wall_23-2148016840.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    alt="Gallery Image 2">

                <img src="https://img.freepik.com/free-photo/beautiful-woman-studio_1157-17142.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    alt="Gallery Image 3">

                <img src="https://img.freepik.com/premium-photo/portrait-beautiful-young-woman-standing-by-plants_1048944-3906329.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    alt="Gallery Image 4">
            </div>
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
            <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8"> MENS MODELS IMAGES</h2>

            <div class="gallery">

                <img src="https://img.freepik.com/free-photo/non-binary-person-green-jacket-posing-artistic-way_23-2148760556.jpg?ga=GA1.1.1275289697.1728223870&semt=ais_siglip"
                    alt="Gallery Image 1">

                <img src="data:image/jpeg;base64,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"
                    alt="Gallery Image 2">

                <img src="https://images.unsplash.com/photo-1636636457693-724f7497bddd?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTAzfHxtb2RlbCUyMG1hbnxlbnwwfHwwfHx8MA%3D%3D"
                    alt="Gallery Image 3">

                <img src="https://images.unsplash.com/photo-1723538451864-d1169bcf4c50?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NTB8fG1vZGVsJTIwbWFufGVufDB8fDB8fHww"
                    alt="Gallery Image 4">
            </div>
        </div>
    </section>

@endsection