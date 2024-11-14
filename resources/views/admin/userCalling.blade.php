@extends('admin.adminBase')


@section('content')
<div class="w-[80%] h-auto bg-[#24292d]">
   
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-bold mb-6">User List</h2>
        
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">ID</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Name</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Email</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Phone Number</th>
                    <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Admin Status</th>
                    {{-- <th class="py-2 px-4 border-b text-left text-sm font-medium text-gray-700">Actions</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr class="hover:bg-gray-100">
                        <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $user->id }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $user->name }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $user->email }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-600">{{ $user->phone_no ?? 'null' }}</td>
                        <td class="py-2 px-4 border-b text-sm text-gray-600">
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

@endsection