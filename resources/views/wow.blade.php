<section id="gallery" class="py-16">
        <div class="container mx-auto px-6 lg:px-12">

            @if ($galleryFirst)
                <h2 class="text-3xl font-bold text-yellow-500 text-center mb-8">{{ $galleryFirst->gallery_title }}</h2>
                @foreach ($galleryFirst->images as $image)
                    <div class="gallery">

                        <img src="{{ asset('images/' . $image->image_path) }}" alt="Gallery Image 1">


                    </div>
                @endforeach
            @endif


        </div>
    </section>