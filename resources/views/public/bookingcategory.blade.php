@extends('public.layout');
@section('content')
<div class="w-full flex justify-center items-center">


    <div class=" bg-zinc-950 h-auto flex items-center justify-center p-6">
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->

            @foreach ($bookcat as $cat )
            <a href="{{route('category.name',$cat->cat_name)}}" class="bg-zinc-900 shadow-lg rounded-lg p-6 transform hover:scale-105 transition-transform duration-300">
                <img src="{{ asset('images/' . $cat->cat_image) }}" alt="Card Image" class="w-full h-24 object-cover rounded-md mb-4">
                <h3 class="text-xl text-center text-white  font-semibold mb-2 capitalize">{{ $cat->cat_name }}</h3>
            </a>
            @endforeach

          
        </div>
    </div>


</div>

@endsection