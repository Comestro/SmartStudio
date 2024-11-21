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
@if(session('msg'))
<div class="mt-4 p-4 bg-green-100 text-green-700 rounded-md">
    {{ session('msg') }}
</div>
@endif
<div class="w-full h-auto">
    <div class="flex flex-col items-center min-h-screen  p-8">

        <div class="w-full max-w-5xl mb-6">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl md:text-3xl font-bold text-yellow-400  ">Contact List</h2>
            </div>
        </div>

        <div class="overflow-x-auto w-full rounded-lg scrollbar-hide">
            <table class="min-w-full bg-gray-800 rounded-lg ">
                <thead>
                    <tr class="bg-yellow-300 text-black uppercase text-sm leading-normal">
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">ID</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">Name</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">Status</th>
                        <th class="px-4 md:px-6 py-3 text-left font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="">
                    <!-- Row 1 -->
                    @foreach ($contacts as $contact)
                    <tr class="border-t border-white hover:bg-gray-700 transition duration-300">
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{$contact->id}}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{$contact->name}}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">
                            <span class="bg-gradient-to-r from-green-400 to-green-600 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">{{$contact->is_read? "Readed": "Unreaded"}}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                           <div class="flex gap-3">
                           
                           <a class="bg-gradient-to-r from-indigo-500 to-indigo-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300" href="{{route('admin.contact.view',$contact->id)}}">View Message</a>
                            <form action="">
                                <button class="bg-gradient-to-r from-red-500 to-red-700 text-white px-3 py-1 rounded hover:bg-gradient-to-l  transition duration-300">
                                    Delete
                                </button>
                            </form>

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