<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photography</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
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


        @media (max-width: 768px) {
            .gallery {
                flex-direction: column;
                height: auto;
            }

            .gallery img {
                height: auto;
                width: 100%;
            }
        }

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


        @media (max-width: 768px) {
            .gallery {
                flex-direction: column;
                height: auto;
            }

            .gallery img {
                height: auto;
                width: 100%;
            }
        }
    </style>
    @livewireStyles
</head>

<body class="bg-white min-h-screen">
    <div class="h-180 flex flex-col md:flex-row">
        <aside class="flex-shrink-0 w-full md:w-1/4 bg-black text-white p-6 flex flex-col items-center">
            <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180" alt="Logo"
                class="rounded-full w-24 h-24 object-cover mb-6">

            <nav class="flex-1 w-full text-center space-y-4">
                <div class="flex justify-between items-center w-full">
                    <a href="#" class="text-lg text-yellow-400">Home</a>
                    <i class="bi bi-caret-left-fill text-yellow-400 text-2xl"></i>
                </div>


                <div class="relative">

                    <div class="absolute top-0 left-0 h-full w-1 bg-yellow-200"></div>


                    <ul class="pl-6 space-y-4 text-left">
                        <li class="flex items-center">
                            <a href="#" class="text-lg text-yellow-400 hover:text-gray-300">Gallery Albums</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-xl hover:text-gray-300">Background Images</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-lg hover:text-gray-300">Background Video</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-lg hover:text-gray-300">Portfolio</a>
                        </li>
                        <li class="flex items-center">
                            <a href="#" class="text-lg hover:text-gray-300">Full Screen Slider</a>
                        </li>
                    </ul>
                </div>


                <hr class="border-t border-white mt-6 w-full">
                <div class="space-y-2 mt-4">
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('about') }}" class="text-white text-lg hover:text-yellow-500">About</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('service') }}" class="text-white text-lg hover:text-yellow-500">Services</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('contact') }}" class="text-white text-lg hover:text-yellow-500">Contact</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('portfolio') }}"
                            class="text-white text-lg hover:text-yellow-500">Portfolio</a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                    <div class="flex justify-between items-center w-full">
                        <a href="{{ route('category.view') }}"
                            class="text-black text-lg bg-yellow-400 px-3 py-1 rounded">Book Now -></a>
                        <i class="bi bi-caret-left-fill text-white text-2xl"></i>
                    </div>
                </div>
            </nav>

            <img src="https://tse3.mm.bing.net/th?id=OIP.3q3KkIYCwkoXEXdh3KC3SgHaE8&pid=Api&P=0&h=180"
                alt="Profile Picture" class="rounded-full w-24 h-24 object-cover mt-6">

            <p class="text-center text-lg px-4 mt-4">Welcome To "Smart Studio"</p>

            <div class="flex justify-center space-x-6 mt-4">
                <i class="bi bi-facebook text-2xl text-yellow-500"></i>
                <i class="bi bi-twitter text-2xl text-yellow-500"></i>
                <i class="bi bi-instagram text-2xl text-yellow-500"></i>
            </div>
        </aside>



        @section('content')

        @show
        <div class="flex flex-col md:flex-row bg-black text-white p-8 gap-4 justify-between mt-4">
            <div class="flex flex-col items-start md:w-1/4">
                <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180"
                    alt="Logo" class="rounded-full w-24 h-24 object-cover mb-4">
                <p class="text-white"> We provide exceptional photography services that capture your moments
                    beautifully.
                </p>
            </div>


            <div class="flex flex-col items-center md:w-1/2">
                <h1 class="text-white text-2xl mb-2">INSTA GALLERY</h1>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-2 mt-2">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.J0EyMPxp69oUBURsRtCqEwHaE7&pid=Api&P=0&h=180"
                        alt="Image 1" class="w-24 h-24 object-cover rounded-md">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.n1Ft5hFRPdgmYJQO-Fz3HgHaEK&pid=Api&P=0&h=180"
                        alt="Image 2" class="w-24 h-24 object-cover rounded-md">
                    <img src="https://tse1.mm.bing.net/th?id=OIP.ZAzbO8SsQk5J40oI55OAIAHaE7&pid=Api&P=0&h=180"
                        alt="Image 3" class="w-24 h-24 object-cover rounded-md">
                    <img src="https://tse2.mm.bing.net/th?id=OIP.49hIyMLKW4_HMjUK_PBZlQHaFD&pid=Api&P=0&h=180"
                        alt="Image 4" class="w-24 h-24 object-cover rounded-md">
                </div>
            </div>

            <div class="flex flex-col items-start md:w-1/4">
                <h1 class="text-yellow-600 text-2xl mb-2">CONTACT</h1>
                <p>Phone: 9546784398</p>
                <p>Email: smartstudio@gmail.com</p>
                <div class="flex justify-center space-x-4 mt-4">
                    <i class="bi bi-facebook text-2xl text-yellow-500"></i>
                    <i class="bi bi-twitter text-2xl text-yellow-500"></i>
                    <i class="bi bi-instagram text-2xl text-yellow-500"></i>
                </div>
            </div>
        </div>
        @livewireScripts
</body>

</html>