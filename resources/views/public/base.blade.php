<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Image Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

<body class="bg-black roboto-medium">


    <header class="bg-gray-900 text-white py-3 px-4 fixed top-0 w-full z-10 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo"
                    class="w-12 h-12 rounded-full">
                <span class="text-xl font-bold">Smart Studio</span>
            </div>

            <nav class="hidden md:flex space-x-6">
                <a href="{{route('home')}}" class="text-yellow-500">Home</a>
                <a href="{{route('about')}}" class="hover:text-yellow-500">About</a>
                <a href="{{route('gallery')}}" class="hover:text-yellow-500">Gallery</a>
                <a href="{{route('portfolio')}}" class="hover:text-yellow-500">Portfolio</a>
                <a href="{{route('contact')}}" class="hover:text-yellow-500">Contact</a>
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

    @section('content')
      
  @show

  <div class="flex flex-col md:flex-row bg-gray-900 text-white p-8 gap-4 justify-between mt-4">
    <div class="flex flex-col items-start md:w-1/4">
        <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180" alt="Logo"
            class="rounded-full w-24 h-24 object-cover mb-4">
        <p class="text-white"> We provide exceptional photography services that capture your moments beautifully.
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
</body>
</html>