@extends('admin.adminBase')
@section('content')
<style>
    .scrollbar-hide::-webkit-scrollbar {
           display: none;
       }


       .scrollbar-hide {
           scrollbar-width: none;
       }
</style>
<div class="w-full h-auto">
    <div class="flex flex-col items-center min-h-screen  p-8">

        <div class="w-full max-w-5xl mb-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl md:text-3xl font-bold text-yellow-400  ">Manage Ad</h2>
                <a href="{{route('managead.create')}}" class="bg-green-500 px-3 py-2 rounded">Create Ad</a>
            </div>
        </div>

        <div class="overflow-x-auto w-full rounded-lg scrollbar-hide">
            <table class="min-w-full bg-gray-800 rounded-lg ">
                <thead>
                    <tr class="bg-yellow-300 text-black uppercase text-sm leading-normal">
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">ID</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">title</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">status</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">price</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="">
                    <!-- Row 1 -->
                    @foreach ($items as $item)
                    <tr class="border-t border-white hover:bg-gray-700 transition duration-300">
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{$item->id}}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{$item->title}}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">
                            @if ($item->is_read)
                            <span class="bg-gradient-to-r from-red-400 to-red-600 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">Inactive</span>
                            @else
                            <span class="bg-gradient-to-r from-green-400 to-green-600 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">Active</span>

                            @endif
                        </td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">₹{{$item->price}}</td>
                        <td class="py-3 px-6 text-center">
                           <div class="flex gap-3">
                           
                           
                            <form action="">
                                <button class="bg-gradient-to-r from-red-500 to-red-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">
                                    Delete
                                </button>
                            </form>
                            <a href="{{route('managead.edit',$item->id)}}" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300" >Edit</a>

                           </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>



      
    </div>
</div>

@endsection