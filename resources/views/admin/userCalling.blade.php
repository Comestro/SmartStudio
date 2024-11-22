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

<div class="w-full h-auto  ">
   
    <div class="container mx-auto px-4 ">
        <h2 class="text-2xl md:text-3xl font-bold text-yellow-400 mb-4 md:mb-6">User List</h2>
        <div class="overflow-x-auto scrollbar-hide rounded-lg">
        <table class="min-w-full bg-gray-800 rounded-lg ">
            <thead>
                <tr class="bg-yellow-400 text-black ">
                    <th class="px-4 md:px-6 py-3 text-left font-semibold">ID</th>
                    <th class="px-4 md:px-6 py-3 text-left font-semibold">Name</th>
                    <th class="px-4 md:px-6 py-3 text-left font-semibold">Email</th>
                    <th class="px-4 md:px-6 py-3 text-left font-semibold">Phone Number</th>
                    <th class="px-4 md:px-6 py-3 text-left font-semibold">Admin Status</th>
                    {{-- <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr  class="border-t border-white hover:bg-gray-700 transition duration-300">
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $user->id }}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $user->name }}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $user->email }}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">{{ $user->phone_no ?? 'null' }}</td>
                        <td class="px-4 md:px-6 py-3 whitespace-nowrap">
                            {{ $user->isadmin ? 'Admin' : 'User' }}
                        </td>
                        {{-- <td class="py-2 px-4 border-b text-sm">
                            <a href="" class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="" method="POST" class="inline-block ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>

</div>

@endsection