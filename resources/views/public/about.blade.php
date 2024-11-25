@section('title','About | SmartStudio')

  @extends('public.base')

  @section('meta_description')
  Smart Studio offers professional photography services, including portraits, weddings, and events. Explore our gallery to find the perfect shot for your memories. 
  @endsection

@section('content')
  <style>
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .animate-fadeIn {
      animation: fadeIn 1s ease-in-out forwards;
    }
  </style>
  <div class="h-96 bg-cover bg-center flex items-center justify-center text-white px-4 mt-12 animate-fadeIn"
       style="background-image: url('https://img.freepik.com/premium-photo/beautiful-female-model-posing-studio-light-flashes_382934-4673.jpg');">
    <div class="text-center bg-black bg-opacity-50 p-8 rounded-lg max-w-xl w-full mt-10">
      <h1 class="text-3xl md:text-4xl font-bold mb-4">ABOUT US</h1>
      <p class="text-base md:text-lg mb-6">
        Explore the beauty captured through the lens. Dive into a world of moments and memories preserved forever.
      </p>
      <a href="{{route('contact')}}" class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold px-6 py-2 rounded-lg text-lg transition-all duration-300">
        Get in Touch
      </a>
    </div>
  </div>  

 
  <section id="content-section" class="py-20 bg-black text-white animate-fadeIn">
    <div class="container mx-auto px-6 lg:px-12 flex flex-col lg:flex-row items-center gap-12">
      <div class="lg:w-1/2">
        <img 
          src="https://tse2.mm.bing.net/th?id=OIP.qJ84Zjn3T7FJzm1QJ_4i0gHaE8&pid=Api&P=0&h=180" 
          alt="Photographer working with camera" 
          class="w-full h-auto rounded-lg shadow-lg transform transition duration-500 hover:scale-105"
        />
      </div>
      <div class="lg:w-1/2 space-y-4 animate-fadeIn">
        <h2 class="text-3xl md:text-4xl font-bold text-yellow-500 mb-4">Hello, I am the Photographer</h2>
        
        <p class="text-gray-300 leading-relaxed">
          Driven by passion and creativity, I capture the essence of each moment. Specializing in landscapes, portraits, and architecture, every shot tells a unique story.
        </p>
        
        <p class="text-yellow-500 italic leading-relaxed mt-2">
          "Photography is more than capturing an image—it's capturing a feeling, a story, and a perspective."
        </p>
        
        <p class="text-gray-400 leading-relaxed mt-2">
          From vibrant cityscapes to serene nature scenes, each photo reflects my dedication to storytelling. With a focus on detail, light, and emotion, my work celebrates the beauty in every scene.
        </p>
      
        <div class="mt-6">
         <a href="{{route('portfolio')}}"> <button class="bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold hover:bg-yellow-400 px-6 py-3 rounded-lg text-lg  transition-all duration-300">
            See the Portfolio
          </button></a>
        </div>
      </div>
      
    </div>
  </section>
  
  <section class=" bg-black text-white animate-fadeIn">
    <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <div class="relative">
        <img
          src="https://tse4.mm.bing.net/th?id=OIP.ErAiMih0ltX9nxzgEbfN0gHaEp&pid=Api&P=0&h=180" 
          alt="Nature Landscape"
          class="w-full h-64 object-cover rounded-lg shadow-lg transform transition duration-500 hover:scale-105"
        />
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
          <p class="text-white font-semibold">Nature Landscape</p>
        </div>
      </div>
      <div class="relative">
        <img 
          src="https://tse4.mm.bing.net/th?id=OIP.0tLXgmJYrwsxG2BzbhKi5QHaEO&pid=Api&P=0&h=180" 
          alt="Urban Architecture" 
          class="w-full h-64 object-cover rounded-lg shadow-lg transform transition duration-500 hover:scale-105"
        />
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
          <p class="text-white font-semibold">Urban Architecture</p>
        </div>
      </div>
      <div class="relative">
        <img 
          src="https://tse4.mm.bing.net/th?id=OIP.rZYxX2Px8NBcDA1wRe9pSgHaE8&pid=Api&P=0&h=180" 
          alt="Portrait Photography"
          class="w-full h-64 object-cover rounded-lg shadow-lg transform transition duration-500 hover:scale-105"
        />
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
          <p class="text-white font-semibold">Portrait Photography</p>
        </div>
      </div>
      <div class="relative">
        <img 
          src="https://tse4.mm.bing.net/th?id=OIP.rSuNMpSxa7b-oTIb_B5XxwHaFj&pid=Api&P=0&h=180" 
          alt="Abstract Art" 
          class="w-full h-64 object-cover rounded-lg shadow-lg transform transition duration-500 hover:scale-105"
        />
        <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
          <p class="text-white font-semibold">Abstract Art</p>
        </div>
      </div>
      
    </div>
  </section>
  <section id="testimonials" class="py-20 bg-black text-white text-center animate-fadeIn">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-yellow-500 mb-8">Client Testimonials</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-gray-700 p-6 rounded-lg">
          <p class="italic text-gray-300">"Incredible experience! The photos perfectly captured our emotions."</p>
          <p class="text-yellow-500 font-semibold mt-4">- John Doe</p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg">
          <p class="italic text-gray-300">"A true artist with an eye for detail. We loved the final images."</p>
          <p class="text-yellow-500 font-semibold mt-4">- Sarah Lee</p>
        </div>
        <div class="bg-gray-700 p-6 rounded-lg">
          <p class="italic text-gray-300">"An amazing journey through the lens, each photo tells a story."</p>
          <p class="text-yellow-500 font-semibold mt-4">- Chris Tan</p>
        </div>
      </div>
    </div>
  </section>

  <section id="what-we-offer" class="py-20 bg-black text-white text-center animate-fadeIn">
    <div class="container mx-auto px-6">
      <h2 class="text-3xl md:text-4xl font-bold text-yellow-500 mb-4">What We Offer</h2>
      <p class="text-gray-300 mb-10">Comprehensive photography services tailored to meet diverse needs.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div>
          <img src="https://tse2.mm.bing.net/th?id=OIP.zasFRqA9FJbykHr8EuisGAHaE8&pid=Api&P=0&h=180" alt="Professional Portraits" class="w-full h-40 object-cover rounded-lg mb-4">
          <h3 class="text-2xl font-semibold text-yellow-500 mb-2">Professional Portraits</h3>
          <p class="text-gray-400">Capture your personality with high-quality portrait sessions.</p>
        </div>
        <div>
          <img src="https://tse4.mm.bing.net/th?id=OIP.2LiiB7vAx1aGwD7brcEf-AHaE8&pid=Api&P=0&h=180" alt="Event Photography" class="w-full h-40 object-cover rounded-lg mb-4">
          <h3 class="text-2xl font-semibold text-yellow-500 mb-2">Event Photography</h3>
          <p class="text-gray-400">Relive memorable moments with expert event coverage.</p>
        </div>
        <div>
          <img src="https://tse1.mm.bing.net/th?id=OIP.-4-8BLVizbvY-gNrpGPsRAHaE3&pid=Api&P=0&h=180" alt="Landscape & Nature" class="w-full h-40 object-cover rounded-lg mb-4">
          <h3 class="text-2xl font-semibold text-yellow-500 mb-2">Landscape & Nature</h3>
          <p class="text-gray-400">Stunning captures of natural beauty and outdoor scenes.</p>
        </div>
      </div>
    </div>
  </section>

 @endsection