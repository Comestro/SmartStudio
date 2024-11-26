{{-- resources/views/admin/category.blade.php --}}
@extends('admin.adminBase')

@section('title', 'You-tube Video')

@section('content')
<style>
     .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }


        .scrollbar-hide {
            scrollbar-width: none;
        }
</style>

@if(session('msg'))
    <div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
        {{ session('msg') }}
    </div>
@endif
<div class="flex justify-center items-center p-6">
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 w-full max-w-6xl">

        {{-- You-tube Video Insert Form --}}
        <div class="bg-gray-700 p-5 rounded-lg shadow-lg">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Add Budget Category</h2>
            <form action="{{  route('budget.create') }}" method="POST"  class="space-y-4 md:space-y-5">
                @csrf
                <div class="">
                    <label for="cam_category" class="block text-sm font-medium text-gray-300">Category for Budget</label>
                    <select name="cam_category" id="cam_category" class="w-full p-2 sm:p-3 mt-2 bg-gray-800 border-gray-700 rounded-lg  focus:ring-2 focus:ring-yellow-500 focus:outline-none">
                        <option value="null" class="text-gray-500">Select the Category</option>
                        @foreach ($category as $cat)
                        <option value="{{ $cat->cat_name }}" class="text-gray-300">{{ $cat->cat_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="cam_price" class="block text-sm font-medium text-gray-300">Price</label>
                    <input type="number" name="cam_price" id="cam_price" placeholder="Enter the Price" class="w-full p-3 mt-2 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-500">
                </div>
                
                <button type="submit"
                    class="w-full bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold py-3 rounded-lg hover:bg-yellow-400 transition duration-300">
                   Submit
                </button>
            </form>
        </div>

        {{--  Table --}}
        <div class="bg-gray-700 rounded-lg shadow-lg p-4  ">
            <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">Manage Budget</h2>
            <div class="overflow-x-auto scrollbar-hide rounded-lg">
                <table class="min-w-full bg-gray-800 rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-yellow-300 text-black">
                            <th class="px-4 md:px-6 py-3 text-left font-semibold tracking-wider">ID</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold tracking-wider">Category</th>
                            <th class="px-4 md:px-6 py-3 text-left font-semibold tracking-wider">Price</th>
                            <th class="px-4 md:px-6 py-3 text-center font-semibold tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($camera as $cam)
                            <tr class="border-t border-white hover:bg-gray-700 transition duration-300">
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $cam->id }}</td>
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $cam->cam_category }}</td>
                                <td class="px-4 md:px-6 py-3 whitespace-nowrap">
                                    ₹{{ number_format($cam->cam_price, 2) }}</td>
                               
                                <td class="px-4 md:px-6 py-3 flex justify-center gap-2">
                                    <a href="{{route('budget.edit',$cam->id)}}" class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">Edit</a>
                                    <form action="{{route('budget.trash', $cam->id)  }}" method="POST"
                                        class="inline-block" onsubmit="return confirm('Are you sure you want to delete this budget?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-gradient-to-r from-red-500 to-red-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l transition duration-300">Delete</button>
                                    </form>
                                </td>
                            </tr>
                           @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection
