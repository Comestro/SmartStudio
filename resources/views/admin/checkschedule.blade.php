@extends('admin.adminBase')

@section('content')

<div class="bg-gray-800 w-full flex-col mt-6 items-center flex p-8 rounded-lg shadow-lg overflow-x-auto">
    <h2 class="text-3xl text-yellow-500 font-bold mb-6">Manage Booking</h2>
    <table class=" w-full bg-gray-700 rounded-lg">
        <thead class="">
            <tr class="bg-yellow-400 text-black rounded-lg">
                <th class="px-4 py-3 text-left font-medium">Booking Id</th>
                <th class="px-4 py-3 text-left font-medium"> Name</th>
                <th class="px-4 py-3 text-left font-medium"> Mobile</th>
                <th class="px-4 py-3 text-left font-medium"> Date</th>
                <th class="px-4 py-3 text-left font-medium">Booking Category</th>
                {{-- <th class="px-4 py-3 font-medium">Actions</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $item)
            <tr class="border-t border-gray-600">
                <td class="px-4 py-3">{{ $item->id }}</td>
                <td class="px-4 py-3">{{ $item->name }}</td>
                <td class="px-4 py-3">{{ $item->mobile }}</td>
                <td class="px-4 py-3">{{ $item->date }}</td>
                <td class="px-4 py-3">{{ $item->category }}</td>

                {{-- <td class="px-4 py-3 flex ">
                    <a class="bg-red-500 px-3 py-1 rounded text-white" href="">Email</a>
                </td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection