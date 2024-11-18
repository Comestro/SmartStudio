
 
  @extends('public.base')

@section('content')
  
  <style>
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    .animate-fadeIn {
      opacity: 0; 
      animation: fadeIn 1s ease-in-out forwards;
      animation-delay: 0.5s; 
    }
  </style>
  <div class="h-96 bg-cover bg-center flex items-center justify-center text-white px-4 animate-fadeIn"
       style="background-image: url('https://img.freepik.com/premium-photo/beautiful-female-model-posing-studio-light-flashes_382934-4673.jpg');">
    <div class="text-center bg-black bg-opacity-50 p-8 rounded-lg max-w-xl w-full mt-5">
      <h1 class="text-3xl md:text-4xl font-bold mb-4">Hello, I am the <span class="text-yellow-500">Photographer</span></h1>
      <p class="text-base md:text-lg mb-6">
        Explore the beauty captured through the lens. Dive into a world of moments and memories preserved forever.
      </p>
      <button class="bg-yellow-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg text-lg transition-all duration-300">
        Contact Us
      </button>
    </div>
  </div>

  <section class="text-center py-16 px-4 bg-black animate-fadeIn">
    <h2 class="text-3xl font-bold text-yellow-500 mb-4">Find Here</h2>
    <p class="text-white mb-8">
      Locate our studio on the map and visit us to explore our portfolio in person!
    </p>
    
    <div class="w-full max-w-4xl mx-auto mb-12">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28784.500019726094!2d87.46488199140625!3d25.785414299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39efff8324c4f35f%3A0x15a1dfb0863feae2!2sPurnea%2C%20Bihar%2C%20India!5e0!3m2!1sen!2sin!4v1698850000000!5m2!1sen!2sin" 
        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>
  
    <h2 class="text-3xl font-bold text-yellow-500 mb-8">Our Services</h2>
  
  
    <div class="flex flex-col md:flex-row justify-center items-stretch space-y-4 md:space-y-0 md:space-x-4 max-w-4xl mx-auto">
      <div class="flex-1 bg-black border border-gray-300 rounded-lg p-6 text-center shadow-lg transform transition-transform hover:scale-105 duration-300">
        <h3 class="text-xl font-semibold mb-2 text-yellow-500">Address</h3>
        <p class="text-white">123, Main Street, Purnea, Bihar, India</p>
      </div>
      
      
      <div class="flex-1 bg-black border border-gray-300 rounded-lg p-6 text-center shadow-lg transform transition-transform hover:scale-105 duration-300">
        <h3 class="text-xl font-semibold mb-2 text-yellow-500">Phone</h3>
        <p class="text-white">+91 9876543210</p>
      </div>
  
    
      <div class="flex-1 bg-black border border-gray-300 rounded-lg p-6 text-center shadow-lg transform transition-transform hover:scale-105 duration-300">
        <h3 class="text-xl font-semibold mb-2 text-yellow-500">Email</h3>
        <p class="text-white">info@smartstudio.com</p>
      </div>
    </div>

    {{-- <div class="mt-16 max-w-3xl mx-auto text-center">
      <h2 class="text-3xl font-bold text-yellow-500 mb-4">Send Us a Message</h2>
      <p class="text-white mb-8">We'd love to hear from you. Fill out the form below to reach out to us!</p>
      <form action="{{ route('contact.store') }}" method="post" class="bg-gray-200 text-black p-8 rounded-lg shadow-lg">
        @csrf
        
        @if(session('success'))
                <div class="bg-green-100 text-green-700 border border-green-400 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
        <div class="mb-6">
          <input type="text" name="name" placeholder="Your Name" required
                 class="w-full p-4 border border-gray-700 rounded-lg focus:outline-none focus:border-yellow-500">
        </div>
        <div class="mb-6">
          <input type="email" name="email" placeholder="Your Email" required
                 class="w-full p-4 border border-gray-700 rounded-lg focus:outline-none focus:border-yellow-500">
        </div>
        <div class="mb-6">
          <input type="phone_no" name="phone_no" placeholder="Your phone_no" required
                 class="w-full p-4 border border-gray-700 rounded-lg focus:outline-none focus:border-yellow-500">
        </div>
        <div class="mb-6">
          <textarea name="message" rows="5" placeholder="Your Message" required
                    class="w-full p-4 border border-gray-700 rounded-lg focus:outline-none focus:border-yellow-500"></textarea>
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-yellow-200 to-yellow-600 text-black py-3 rounded-lg font-semibold text-lg transition duration-300">
          Send Message
        </button>
      </form>
    </div> --}}
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
          <form class="space-y-6" action="{{ route('contact.store') }}" method="post">
            @csrf
            @if(session('success'))
            <div class="bg-green-100 text-green-700 border border-green-400 p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                  <input type="text" name="name" placeholder="Your Name" required
                      class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                  <input type="email" name="email" placeholder="Your Email" required
                      class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                  <input type="text" name="phone_no" placeholder="Your phone_no" required
                      class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500">
                 
              </div>
              <textarea placeholder="Write your message here" name="message" rows="5"  required
                  class="w-full p-4 rounded-lg bg-gray-800 text-white focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
              <button type="submit"
                  class="w-full py-4 bg-gradient-to-r from-yellow-500 to-white font-semibold rounded-lg text-black">Submit
                  Now</button>
          </form>
      </div>
  </div>
  </section>
  
 
  @endsection