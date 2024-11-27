
<div class="relative w-full h-screen">
    <img d="background-image" src="{{ $backgroundImage }}"
        alt="Fullscreen Image" class="object-cover w-full h-full">

    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-cenetr items-center p-4">
<div class="flex flex-col md:flex-row items-center justify-center mt-24 lg:mt-16  md:px-10">
    <a href="" class="text-white text-2xl md:text-5xl lg:text-5xl font-bold md:mb-0  text-center ">WELCOME TO <span class="text-yellow-400 ">SMART STUDIO</span></a>

</div>
<div class="flex flex-col md:flex-row items-center justify-center mt-2 lg:mt-4 px-6 ">
    <p class="text-white text-md md:text-xl  text-center ">
        Elevate your moments with stunning photography that speaks to the heart. Let us transform ordinary into extraordinary.
    </p>
</div>



<div class="absolute bottom-2 md:bottom-16 left-1/2 transform -translate-x-1/2 flex mb-12 justify-center md:justify-end  md:pr-10">
    <div class="scrollable-carousel w-full flex gap-4 items-center cursor-pointer">
        @foreach ($banners as $item)
            <img src="{{ asset('images/banner/' . $item->b_image) }}" alt=""
                class="rounded-full w-10 h-10 lg:w-20 lg:h-20 object-cover border-2 lg:border-4 border-white hover:scale-105 transition-transform"
                wire:click="updateBackgroundImage('{{ asset('images/banner/' . $item->b_image) }}')">
        @endforeach
    </div>
    <div class="text-yellow-500 hover:text-white text-4xl py-8 px-2 ">
        {{-- <i class="bi bi-arrow-right-circle-fill"></i> --}}
    </div>
</div>



    </div>
</div>
