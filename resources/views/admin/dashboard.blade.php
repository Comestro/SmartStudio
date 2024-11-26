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
    <div class="w-full h-auto p-8 ">
        {{-- nav --}}




        {{-- Dashboard --}}
        <div class="p-6  flex-1">
            <h1 class="text-2xl font-bold text-yellow-500">Dashboard <i
                    class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h1>




            <div class="grid grid-cols md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 mt-4 gap-6">

                <div class="bg-white p-6 rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <?php
                        $totalCategories = App\Models\Category::count();
                        ?>
                        <h2 class="text-lg font-bold text-gray-900">Total categories</h2>
                        <span class="text-yellow-400 text-xl font-bold">+4%</span>
                    </div>
                    <div class="text-4xl font-bold text-gray-900">{{ $totalCategories }}</div>
                    <div class="mt-4">
                        <div class="h-2 w-full bg-gray-700 rounded-full">
                            <div class="h-2 bg-yellow-400 rounded-full" style="width: 35%;"></div>
                        </div>
                    </div>
                    <p class="text-gray-900 mt-2">Capturing moments with creativity....</p>
                    <button class="mt-4 px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500"><a
                            href="{{ route('category') }}"> View Details</a></button>
                </div>


                <div class="bg-white p-6 rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <?php
                        $totalGallery = App\Models\Gallery::count();
                        ?>
                        <h2 class="text-lg font-bold text-gray-900">Total Albums</h2>
                        <span class="text-yellow-400 text-xl font-bold">+8%</span>
                    </div>
                    <div class="text-4xl font-bold text-gray-900">{{ $totalGallery }}</div>
                    <div class="mt-4">
                        <div class="h-2 w-full bg-gray-700 rounded-full">
                            <div class="h-2 bg-yellow-400 rounded-full" style="width: 75%;"></div>
                        </div>
                    </div>
                    <p class="text-gray-900 mt-2">"Life, Light, Lens, Legacy"..</p>
                    <button class="mt-4 px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500"> <a
                            href="{{ route('gallery.manageGallery') }}">View Details</a></button>
                </div>


                <div class="bg-white p-6 rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <?php
                        $totalUser = App\Models\User::count();
                        ?>
                        <h2 class="text-lg font-bold text-gray-900">Total Clients</h2>
                        <span class="text-yellow-400 text-xl font-bold">+10%</span>
                    </div>
                    <div class="text-4xl font-bold text-gray-900">{{ $totalUser }}</div>
                    <div class="mt-4">
                        <div class="h-2 w-full bg-gray-900 rounded-full">
                            <div class="h-2 bg-yellow-400 rounded-full" style="width: 60%;"></div>
                        </div>
                    </div>
                    <p class="text-gray-900 mt-2">"Stories Seen, Moments Saved"..</p>
                    <button class="mt-4 px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500"> <a
                            href="{{ route('admin.user.index') }}"> View Details</a></button>
                </div>
            </div>




            <div class="p-6 flex-1 mt-5 ">
                <h1 class="text-2xl font-bold text-yellow-500">Recent Category Uploads <i
                        class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h1>
            </div>

            <div
                class="mt-8 bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 p-8 rounded-xl shadow-xl text-white">
                <!-- <h2 class="text-2xl font-semibold mb-6">Recent Photo Uploads</h2> -->
                <div class="mt-4">
                    <div class="flex space-x-6 min-w-full overflow-x-auto overflow-y-hidden scrollbar-hide ">
                        @foreach ($categoryImage as $item)
                            <div class="group relative flex-shrink-0">
                                <img src="{{ asset('images/category/' . $item->cat_image) }}" alt="Profile Image"
                                    class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg">
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>




        <div class="p-6 flex-1 mt-5 ">
            <h1 class="text-2xl font-bold text-yellow-500 ">Graph <i
                    class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h1>
        </div>
        <div class="flex flex-col md:flex-row w-full h-auto gap-6 px-6">
            <div class=" w-full md:w-1/2 mt-4">
                <div class="bg-gradient-to-r from-indigo-500 to-yellow-600 p-6 rounded-lg shadow-lg text-white">
                    <h2 class="text-xl font-semibold text-center">Album Creation Over Time</h2>
                    <div class="h-60 mt-4 rounded-lg bg-gray-900 flex justify-between items-end p-3">
                        <div class="bar relative flex flex-col items-center" style="height: 40%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">40%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">M</span>
                        </div>
                        <div class="bar relative flex flex-col items-center" style="height: 70%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">70%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">T</span>
                        </div>
                        <div class="bar relative flex flex-col items-center" style="height: 50%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">50%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">W</span>
                        </div>
                        <div class="bar relative flex flex-col items-center" style="height: 80%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">80%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">T</span>
                        </div>
                        <div class="bar relative flex flex-col items-center" style="height: 90%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">90%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">F</span>
                        </div>
                        <div class="bar relative flex flex-col items-center" style="height: 60%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">60%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">S</span>
                        </div>
                        <div class="bar relative flex flex-col items-center" style="height: 30%;">
                            <span class="text-xs mb-1 opacity-0 hover:opacity-100 transition-opacity">30%</span>
                            <div class="w-10 bg-yellow-500 hover:bg-yellow-400 h-full rounded transition-all"></div>
                            <span class="text-xs mt-2">S</span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4 w-full md:w-1/2">
                <div class="bg-gradient-to-r from-green-500 to-teal-600 p-6 rounded-lg shadow-lg text-white">
                    <h2 class="text-xl font-semibold text-center">Album Creation Over Time</h2>
                    <div class="h-60 mt-4 bg-gray-800 rounded-lg relative flex items-end justify-around p-3">

                        <div class="absolute left-0 bottom-0 h-full w-0.5 bg-white"></div>
                        <div class="absolute left-0 bottom-0 w-[calc(100%-12px)] h-0.5 bg-white"></div>


                        <div class="w-8 bg-green-400 h-1/6 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-2/6 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-3/6 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-4/6 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-5/6 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-1/3 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-1/2 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-2/3 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-5/6 rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                        <div class="w-8 bg-green-400 h-full rounded transition-all hover:scale-105 hover:bg-green-300">
                        </div>
                    </div>
                </div>
            </div>
        </div>





        <div class="mt-8  p-4 px-8 rounded-lg shadow-md text-gray-100">
            <h2 class="text-xl font-bold  pb-2 text-yellow-400">Recent Photos <i
                    class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h2>
            <div class="mt-4 overflow-x-auto">
                <table class="min-w-full text-center bg-gray-900 rounded-lg overflow-hidden shadow-lg">
                    <thead>
                        <tr class="bg-gray-600 text-gray-300">
                            <th class="py-3 px-5 border-b border-gray-600">Photo ID</th>
                            <th class="py-3 px-5 border-b border-gray-600">Gallery</th>
                            <th class="py-3 px-5 border-b border-gray-600">Event</th>
                            <th class="py-3 px-5 border-b border-gray-600">Image</th>
                            <th class="py-3 px-5 border-b border-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galleries as $item)
                            <tr class="bg-gray-800 hover:bg-gray-700 transition duration-200 ease-in-out">
                                <td class="py-3 px-5 border-b border-gray-600">{{ $item->id }}</td>
                                <td class="py-3 px-5 border-b border-gray-600">{{ $item->gallery_title }}</td>
                                <td class="py-3 px-5 border-b border-gray-600">{{ $item->category->cat_name }}</td>
                                <td class="py-3 px-5 border-b border-gray-600">
                                    @if ($item->images->first())
                                        <a href="{{ route('gallery.viewGallery', $item->id) }}">
                                            <img src="{{ asset('images/gallery/' . $item->images->first()->image_path) }}"
                                                alt="{{ $item->gallery_title }}" class="w-full h-24 object-cover">
                                        </a>
                                    @else
                                        <div class="w-full h-48 bg-gray-700 flex items-center justify-center text-white">No
                                            Image</div>
                                    @endif
                                </td>
                                <td class="py-3 px-5 border-b border-gray-600">
                                    <div class="flex justify-center space-x-2">
                                        <button
                                            class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md"><a
                                                href="{{ route('gallery.viewGallery', $item->id) }}">View</a></button>

                                    </div>
                                </td>
                            </tr>
                            
                        @endforeach
                       
                    </tbody>
                   
                </table>
                {{ $galleries->links() }}
            </div>
        </div>



    </div>
@endsection
