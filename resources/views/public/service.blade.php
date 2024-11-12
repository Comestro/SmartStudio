@extends('public.base')

@section('content')

<style>
    html {
      scroll-behavior: smooth;
    }
  </style>
 <body class=" text-gray-800">
  <header class="bg-gray-900 text-white py-3 px-4 fixed top-0 w-full z-10 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
      <div class="flex items-center space-x-3">
        <img src="https://th.bing.com/th?id=OIP.XfloBSB32f50RImZskOHFwHaHa&w=250&h=250" alt="Logo" class="w-12 h-12 rounded-full">
        <span class="text-xl font-bold">Smart Studio</span>
      </div>
      <nav class="hidden md:flex space-x-6">
        <a href="{{ route('home') }}" class="text-yellow-500 hover:text-yellow-300">Home</a>
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

 
  <section class="bg-cover bg-center bg-black h-screen relative" style="background-image: url('https://img.freepik.com/premium-photo/beautiful-female-model-posing-studio-light-flashes_382934-4673.jpg');">
    <div class="absolute inset-0  bg-opacity-60 flex items-center justify-center">
      <div class="text-center text-white px-4 sm:px-8">
        <h1 class="text-5xl font-bold mb-4">Photography Services</h1>
        <p class="text-xl mb-6">Turning Moments into Timeless Memories</p>
        <a href="#services" class="mt-8 inline-block bg-yellow-500 text-white py-3 px-6 rounded-full hover:bg-blue-700 transition">Explore Services</a>
      </div>
    </div>
  </section>
<div class="py-8 bg-white"></div>
 
  <section id="services" class="py-20 bg-black text-gray-50">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl font-semibold text-center mb-10 text-yellow-400">Our Photography Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
     
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          <img src="https://th.bing.com/th/id/OIP.2LiiB7vAx1aGwD7brcEf-AHaE8?w=260&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Event Photography" class="w-full h-60 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold mb-2 text-black">Event Photography</h3>
            <p class="text-gray-600">Professional coverage for weddings, corporate events, and celebrations.</p>
          </div>
        </div>
    
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          <img src="https://th.bing.com/th/id/OIP.48C1fjm5A4taM6KNeVPyTQHaKI?w=202&h=277&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Portrait Photography" class="w-full h-60 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold mb-2 text-black">Portrait Photography</h3>
            <p class="text-gray-600">High-quality portrait sessions that capture your unique personality.</p>
          </div>
        </div>
      
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          <img src="https://th.bing.com/th/id/OIP.zecvDpYrRah6-aH-cWVXnQHaEB?w=308&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Editing & Retouching" class="w-full h-60 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold mb-2 text-black">Editing & Retouching</h3>
            <p class="text-gray-600">Enhance your photos with expert-level editing and retouching.</p>
          </div>
        </div>
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          <img src="https://tse1.mm.bing.net/th?id=OIP.UXKhh3eNOCGFEZCYZUcXygHaE8&pid=Api&P=0&h=180" alt="Editing & Retouching" class="w-full h-60 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold mb-2 text-black">Real State Photography</h3>
            <p class="text-gray-600">Professional photos for real estate listings to showcase homes and properties.</p>
          </div>
        </div>
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          <img src="https://tse4.mm.bing.net/th?id=OIP.lA0cPeokqVgRXuc8ZaU9ZgHaF_&pid=Api&P=0&h=180" alt="Editing & Retouching" class="w-full h-60 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold mb-2 text-black">Family Photography</h3>
            <p class="text-gray-600">Beautiful family portraits to capture moments with your loved ones.</p>
          </div>
        </div>
        <div class="bg-gray-50 rounded-lg overflow-hidden shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
          <img src="https://tse1.mm.bing.net/th?id=OIP.uqUOMCk2KIKUAI_tlH7IKAHaE8&pid=Api&P=0&h=180" alt="Editing & Retouching" class="w-full h-60 object-cover">
          <div class="p-6 text-center">
            <h3 class="text-xl font-semibold mb-2 text-black">Wedding Photography</h3>
            <p class="text-gray-600">Capture the magic of your special day with professional wedding photography services.</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <div class="py-8 bg-white"></div>
  <section class="bg-black py-12">
    <div class="container mx-auto text-center text-white">
        <h2 class="text-3xl font-bold mb-4 text-yellow-600">Book a Session Today!</h2>
        <p class="mb-6">Let's create beautiful memories together. Contact us to discuss your photography needs.</p>
        <a href="{{route('contact')}}" class="bg-yellow-500 text-black font-semibold py-3 px-6 rounded-full hover:bg-gray-200 transition">Contact Us</a>
    </div>
</section>
<div class="py-8 bg-white"></div>
@endsection
