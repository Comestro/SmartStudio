@extends('admin.adminBase')

@section('content')

<div class="w-full h-screen p-8 bg-gray-900 text-gray-100">
    <!-- Form Section -->
    <div class="w-full md:w-1/2 lg:w-1/3 mx-auto mb-8">
        <div class="bg-gray-800 rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-center text-gray-300 mb-4">Add Budget Category</h2>
            <form action="{{ route('budget.create') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="cam_category" class="text-gray-400 block mb-2">Category for Budget</label>
                    <select name="cam_category" id="cam_category" class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option value="null" class="text-gray-500">Select the Category</option>
                        @foreach ($category as $cat)
                        <option value="{{ $cat->cat_name }}" class="text-gray-300">{{ $cat->cat_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="cam_price" class="text-gray-400 block mb-2">Price</label>
                    <input type="number" name="cam_price" id="cam_price" placeholder="Enter the Price" class="w-full p-3 bg-gray-700 border border-gray-600 rounded-lg text-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-500">
                </div>
                <button type="submit" class="w-full py-3 bg-indigo-600 rounded-lg text-gray-200 hover:bg-indigo-500 transition duration-300">Submit</button>
            </form>
        </div>
    </div>

    <!-- Table Section -->
    <div class="overflow-x-auto mt-8">
        <div class="w-full max-w-5xl mx-auto">
            <table class="min-w-full bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                <thead>
                    <tr class="bg-gray-700">
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-400 uppercase tracking-wider">ID</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-400 uppercase tracking-wider">Category</th>
                        <th class="py-3 px-4 text-left text-sm font-semibold text-gray-400 uppercase tracking-wider">Price</th>
                        <th class="py-3 px-4 text-center text-sm font-semibold text-gray-400 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($camera as $cam)
                    <tr class="hover:bg-gray-700 transition duration-200">
                        <td class="py-4 px-4 border-b border-gray-700 text-gray-300">{{ $cam->id }}</td>
                        <td class="py-4 px-4 border-b border-gray-700 text-gray-300">{{ $cam->cam_category }}</td>
                        <td class="py-4 px-4 border-b border-gray-700 text-gray-300">₹{{ number_format($cam->cam_price, 2) }}</td>
                        <td class="py-4 px-4 border-b border-gray-700 text-center">
                            <a href="{{route('budget.edit',$cam->id)}}" class="text-blue-500 hover:underline mr-4">Edit</a>
                           
                            <form action="{{ route('budget.trash', $cam->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this budget?');" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">Delete
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
