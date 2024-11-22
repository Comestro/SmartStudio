@extends('admin.adminBase')
@section('content')

<div class="w-full">
    <div class="w-full md:w-1/2 lg:w-1/3 mx-auto mb-8">
        <div class="bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-center text-gray-300 mb-4">Edit Category Details</h2>
            <form action="{{ route('budget.update',$editId->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="cam_category" class="text-yellow-500 block mb-2">Category for Budget</label>
                    <select name="cam_category" id="cam_category" class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="null" class="text-gray-500">{{$editId->cam_category}}</option>
                        @foreach ($category as $cat)
                        <option value="{{ $cat->cat_name }}" class="text-gray-300">{{$cat->cat_name  }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="cam_price" class="text-gray-400 block mb-2">Price</label>
                    <input type="number" name="cam_price" id="cam_price" placeholder="Enter the Price" value="{{$editId->cam_price}}" class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500">
                </div>
                <button type="submit" class="w-full bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection