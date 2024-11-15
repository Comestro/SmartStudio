<div>
    <img d="background-image" src="{{ $backgroundImage }}"
        alt="Fullscreen Image" class="object-cover w-full h-450px">

    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col text-center p-4">
    <div class="flex flex-col md:flex-row items-center justify-between mt-4 px-6 md:px-10">
  
    <h1 class="text-white text-3xl md:text-5xl font-bold mb-2 mr-5 ml-0 md:ml-10 text-center md:text-left">
        WELCOME TO <span class="text-yellow-400">SMART STUDIO</span>
    </h1>

   
    <form method="POST" action="{{ route('logout') }}" class="w-full md:w-auto mt-4 md:mt-0">
        @csrf
        <button type="submit" 
            class="w-full md:w-auto px-4 py-2 font-semibold rounded border border-yellow-400 text-yellow-400 bg-transparent hover:bg-yellow-400 hover:text-white transition">
            Logout
        </button>
    </form>
</div>

<p class="text-white text-lg md:text-xl mt-2 text-center md:text-left px-4">
    This is a paragraph inside the fullscreen image. The content is centered both vertically and horizontally.
</p>

        <div class="absolute bottom-36 left-1/2 transform -translate-x-1/2 flex items-center space-x-6">
            {{-- <img src="https://th.bing.com/th?q=Menu+Icon+On+Black+Background&w=120&h=120&c=1&rs=1&qlt=90&cb=1&dpr=1.3&pid=InlineBlock&mkt=en-IN&cc=IN&setlang=en&adlt=moderate&t=1&mw=247"
            alt="Profile 1" class="rounded-full w-16 h-16 object-cover border-4 border-white"> --}}
            @foreach ($banners as $item)
                <img src="{{ asset('images/' . $item->b_image) }}" alt=""
                    class="rounded-full w-20 h-20 object-cover border-4 border-white" wire:click="updateBackgroundImage('{{ asset('images/' . $item->b_image) }}')">
            @endforeach
          
        </div>
    </div>
</div>
