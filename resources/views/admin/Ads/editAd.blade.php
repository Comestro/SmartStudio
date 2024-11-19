@extends('admin.adminBase')
@section('content')

<div class="w-full h-auto">

    <div class="container mx-auto p-1 lg:w-3/4">

        <div class="w-full ">
            <div class="flex justify-between items-center   mb-4 ">
                <h2 class="lg:text-4xl font-bold text-yellow-500">Edit Ad</h2>
                <a href="{{ route('managead.index') }}" class="inline-flex items-center bg-gradient-to-t from-yellow-400 via-yellow-300 to-yellow-200 text-black px-6 py-3 rounded-md hover:bg-gray-800 shadow-md transition duration-200 lg:text-">
                    ← Ad List
                </a>
            </div>
        </div>


        <div class="bg-gray-800 lg:p-7 p-3 rounded shadow-lg">
            <form action="{{route('managead.update',$items->id)}}" method="post" enctype="multipart/form-data" class="space-y-10">
                @csrf
                @method('PUT')


                <div>
                    <label for="title" class="block text-yellow-400 text-xl font-medium mb-2">Ad Title</label>
                    <input type="text" id="title" value="{{$items->title}}" name="title" required placeholder="Enter Ad title here.."
                        class="w-full px-4 py-2 border text-black border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">
                    @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="price" class="block text-yellow-400 text-xl font-medium mb-2">Ad Price</label>
                    <input type="text" id="price" name="price" value="{{$items->price}}" required placeholder="Enter Ad Price here.."
                        class="w-full px-4 py-2 border text-black border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">
                    @error('price')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="description" class="block text-yellow-400 text-xl font-medium mb-2">Ad Price</label>
                    <textarea type="text" id="description" name="description" required placeholder="Enter description name here.."
                        rows="4" class="w-full px-4 py-2 border text-black border-gray-300 resize-none rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">{{$items->description}}</textarea>
                    @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="image" class="block text-yellow-400 text-xl  font-medium mb-2">Ad Image</label>
                    <input type="file" id="image" name="image"
                        class="w-full px-4 py-2 border border-gray-300 text-black bg-white rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">
                    <img src="{{ asset('images/ads/'. $items->image) }}" alt="{{ $items->image }}" class="w-auto mt-2 h-32">
                    @error('image')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="status" class="block text-yellow-400 text-xl font-medium mb-2">Status</label>
                    <select id="status" name="status" required
                        class="w-full px-4 py-2 border text-black border-gray-300 rounded-md shadow-sm focus:ring focus:ring-yellow-400 focus:outline-none">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    @error('status')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="w-full font-semibold text-xl  bg-gradient-to-r from-yellow-400 to-yellow-300  text-black py-3 rounded-md hover:bg-yellow-700 shadow-md mt-6">
                    Create Ad
                </button>
            </form>
        </div>
    </div>
</div>

@endsection