@extends('admin.adminBase')

@section('content')
<div class="w-full h-auto">
    <div class="flex flex-col items-center min-h-screen  p-8">

        <div class="w-full max-w-5xl mb-6">
            <div class="flex justify-between items-center bg-gradient-to-r from-yellow-100 to-yellow-500 text-white p-4 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-black">Contact List</h2>
            </div>
        </div>

        <div class="overflow-x-auto w-full">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-indigo-600 text-white uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    <!-- Row 1 -->
                    @foreach ($contacts as $contact)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left whitespace-nowrap">{{$contact->id}}</td>
                        <td class="py-3 px-6 text-left">{{$contact->name}}</td>
                        <td class="py-3 px-6 text-center">
                            <span class="bg-green-500 text-white py-1 px-3 rounded-full text-xs">{{$contact->is_readed ? "Unread": "Read"}}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                           <div class="flex gap-3">
                           <a class="bg-green-500 hover:bg-green-700 text-white py-1 px-3 rounded text-xs" href="{{route('admin.contact.view',$contact->id)}}">View Message</a>
                            <form action="">
                                <button class="bg-red-500 hover:bg-red-700 text-white py-1 px-3 rounded text-xs">
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