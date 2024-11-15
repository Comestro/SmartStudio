<div>
    <img d="background-image" src="{{ $backgroundImage }}"
        alt="Fullscreen Image" class="object-cover w-full h-450px">

    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col text-center p-4">
        <h1 class="text-white text-5xl font-bold mb-2 mt-4 mr-5">
            WELCOME TO <span class="text-yellow-400">SMART STUDIO</span>
        </h1>
        <p class="text-white text-xl mt-2">
            This is a paragraph inside the fullscreen image. The content is centered both vertically and
            horizontally.
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
