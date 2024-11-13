@extends('admin.adminBase');

@section('content')

<div class="w-full h-screen ">
    <div class="w-4/12">
        <div class=" bg-gray-900 flex flex-col items-center justify-center p-4 h-[300px]">
            <form action="{{route('budget.create')}}" method="post">
                @csrf
                <label for="" class="text-slate-300">Category for budget</label>
                <select class="w-full max-w-md p-3 mb-4 text-white bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500" name="cam_category" id="">
                    <option value="null">Select the Category</option>
                    @foreach ($category as $cat )
                    <option value="{{$cat->cat_name }}">{{ $cat->cat_name }}</option>
                    @endforeach
                </select>
                <label for="" class="text-slate-300">Category for budget</label>
                <input type="number" name="cam_price" placeholder="Enter the Price"
                    class="w-full max-w-md p-3 text-white bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 placeholder-gray-500">

                <button type="submit" class="flex w-full text-center mt-4 bg-yellow-700 px-3 py-2 rounded text-zinc-300">submit</button>
            </form>


        </div>
    

    </div>
    <div class="w-6/12">
            <table class=" dark:bg-gray-800 rounded-lg border border-gray-300 dark:border-gray-700">
                <thead>
                    <tr>
                        <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 font-semibold text-gray-600 dark:text-gray-300 border-b border-gray-300 dark:border-gray-600">id</th>
                        <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 font-semibold text-gray-600 dark:text-gray-300 border-b border-gray-300 dark:border-gray-600">category </th>
                        <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 font-semibold text-gray-600 dark:text-gray-300 border-b border-gray-300 dark:border-gray-600">price</th>
                        <th class="py-3 px-6 bg-gray-200 dark:bg-gray-700 font-semibold text-gray-600 dark:text-gray-300 border-b border-gray-300 dark:border-gray-600">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($camera as $cam )
                    <tr>
                        <td class="py-3 px-6 border-b border-gray-300 dark:border-gray-700">{{$cam->id}}</td>
                        <td class="py-3 px-6 border-b border-gray-300 dark:border-gray-700">{{$cam->cam_category}}</td>
                        <td class="py-3 px-6 border-b border-gray-300 dark:border-gray-700">{{$cam->cam_price}}</td>
                        <td class="py-3 px-6 border-b border-gray-300 dark:border-gray-700">
                            <a href="">edit</a>
                            <a href="">delete</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>

</div>


@endsection