  @extends('admin.adminBase')
  @section('content')
  <div class="w-[80%] h-auto bg-[#24292d]">
    {{-- nav --}}
    <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4">
        <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
        </div>
        <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
            <div class="relative w-full">
                <input type="text" placeholder="Search..." class="w-full pl-4 pr-10 py-2 bg-gray-500 rounded-full focus:outline-none">
                <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                    <button class="p-2 rounded-full text-black">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/3 h-auto flex justify-center items-center gap-2">
            <div class="w-full md:w-24 h-10 bg-gray-500 rounded-lg flex items-center justify-center text-center p-2">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class=" text-base font-semibold text-[#eee] px-4 py-2 rounded flex item-center justify-center">
                        <img width="24" height="24" src="https://img.icons8.com/sf-black/64/FFFFFF/exit.png" alt="exit" class="ml-1"/>
                        Logout
                    </button>
                </form>
                {{-- <p class="text-base font-semibold text-[#eee]">Logout</p>
                <img width="24" height="24" src="https://img.icons8.com/sf-black/64/FFFFFF/exit.png" alt="exit" class="ml-1"/> --}}
            </div>
            <div class="w-12 h-12  rounded-full flex items-center justify-center">
                <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full" alt=""/>
            </div>
        </div>
    </div>
    
    
    {{-- Dashboard --}}
    <div class="p-6  flex-1">
        <h1 class="text-2xl font-semibold text-white">Dashboard</h1>
        
        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-yellow-500">Total Photos</h2>
            <p class="mt-2 text-2xl">1234+</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-yellow-500">Total Albums</h2>
            <p class="mt-2 text-2xl">45+</p>
          </div>
          <div class="bg-white p-4 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-yellow-500">Total Clients</h2>
            <p class="mt-2 text-2xl">32+</p>
          </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 mt-4 gap-6">
            <div class="bg-gray-900 p-6 rounded-lg">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-300">Total Order</h2>
                    <span class="text-green-400 text-xl font-bold">+4%</span>
                </div>
                <div class="text-4xl font-bold text-gray-300">85 </div>
                <div class="mt-4">
                    <div class="h-2 w-full bg-gray-700 rounded-full">
                        <div class="h-2 bg-green-400 rounded-full" style="width: 35%;"></div>
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Lorem ipsum dolor sit amet...</p>
                <button class="mt-4 px-4 py-2 bg-green-400 text-gray-900 rounded-lg">View Details</button>
            </div>
            <div class="bg-gray-900 p-6 rounded-lg">
                <div class="flex items-center justify-between">
                    <h2 class="text-lg font-semibold text-gray-300">Total Pics</h2>
                    <span class="text-green-400 text-xl font-bold">+8%</span>
                </div>
                <div class="text-4xl font-bold text-gray-300">850 </div>
                <div class="mt-4">
                    <div class="h-2 w-full bg-gray-700 rounded-full">
                        <div class="h-2 bg-green-400 rounded-full" style="width: 75%;"></div>
                    </div>
                </div>
                <p class="text-gray-500 mt-2">Lorem ipsum dolor sit amet...</p>
                <button class="mt-4 px-4 py-2 bg-green-400 text-gray-900 rounded-lg">View Details</button>
            </div>

           
        </div>
        
        {{-- Photos Section --}}
        <div class="mt-8 bg-gray-800 p-6 rounded-lg shadow-md text-gray-100">
    <h2 class="text-lg font-semibold">Recent Photo Uploads</h2>
    <div class="mt-4 overflow-x-auto">
        <div class="flex space-x-4 min-w-full"> <!-- Use flex for horizontal layout -->
            <img src="../images/user_profile.png" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
            <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
            <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
            <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
            <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
            <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
        </div>
    </div>
    </div>

        
        
        

        {{-- graph --}}
        <div class="flex flex-col md:flex-row w-full h-auto gap-4">
            <!-- First Chart -->
            <div class="mt-4 w-full md:w-1/2">
                <div class="bg-gray-800 p-4 rounded-lg shadow-md text-gray-100">
                    <h2 class="text-lg font-semibold text-center">Album Creation Over Time</h2>
                    <div class="h-60 mt-4 bg-gray-700 rounded-lg">
                        <div class="bar-chart flex justify-between items-end h-full p-2">
                            <div class="bar  flex flex-col items-center" style="height: 40%;">
                                <span class="block text-xs text-center">M</span>
                            </div>
                            <div class="bar  flex flex-col items-center" style="height: 70%;">
                                <span class="block text-xs text-center">T</span>
                            </div>
                            <div class="bar  flex flex-col items-center" style="height: 50%;">
                                <span class="block text-xs text-center">W</span>
                            </div>
                            <div class="bar  flex flex-col items-center" style="height: 80%;">
                                <span class="block text-xs text-center">T</span>
                            </div>
                            <div class="bar  flex flex-col items-center" style="height: 90%;">
                                <span class="block text-xs text-center">F</span>
                            </div>
                            <div class="bar  flex flex-col items-center" style="height: 60%;">
                                <span class="block text-xs text-center">S</span>
                            </div>
                            <div class="bar flex flex-col items-center" style="height: 30%;">
                                <span class="block text-xs text-center">S</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Second Chart -->
            <div class="mt-4 w-full md:w-1/2">
                <div class="bg-gray-800 p-4 rounded-lg shadow-md text-gray-100">
                    <h2 class="text-lg font-semibold text-center">Album Creation Over Time</h2>
                    <div class="h-60 mt-4 bg-gray-700 rounded-lg relative flex items-end justify-around gap-2">
                        <!-- Adjusted white lines -->
                        <div class="absolute left-0 bottom-0 h-full w-0.5 bg-white"></div> <!-- Moved to left-0 -->
                        <div class="absolute left-0 bottom-0 w-[calc(100%-8px)] h-0.5 bg-white"></div>
            
                        <!-- Bars with adjusted margins for consistent spacing -->
                        <div class="w-6 bg-green-500 h-1/6 md:h-1/4 lg:h-1/3 xl:h-1/2 mt-1"></div>
                        <div class="w-6 bg-green-500 h-2/6 md:h-1/3 lg:h-1/2 xl:h-2/3 mt-1"></div>
                        <div class="w-6 bg-green-500 h-3/6 md:h-1/2 lg:h-2/3 xl:h-3/4 mt-1"></div>
                        <div class="w-6 bg-green-500 h-4/6 md:h-3/4 lg:h-full xl:h-5/6 mt-1"></div>
                        <div class="w-6 bg-green-500 h-3/6 md:h-2/3 lg:h-3/4 xl:h-full mt-1"></div>
                        <div class="w-6 bg-green-500 h-1/3 md:h-1/2 lg:h-2/3 xl:h-3/4 mt-1"></div>
                        <div class="w-6 bg-green-500 h-1/2 md:h-2/3 lg:h-3/4 xl:h-full mt-1"></div>
                        <div class="w-6 bg-green-500 h-2/3 md:h-3/4 lg:h-full xl:h-5/6 mt-1"></div>
                        <div class="w-6 bg-green-500 h-5/6 md:h-full lg:h-5/6 xl:h-full mt-1"></div>
                        <div class="w-6 bg-green-500 h-full md:h-full lg:h-full xl:h-full mt-1"></div>
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
        
        
        
        
        

        {{-- table --}}
        <div class="mt-8 bg-gray-800 p-6 rounded-lg shadow-md text-gray-100">
            <h2 class="text-lg font-semibold">Recent Photos</h2>
            <div class="mt-4 overflow-x-auto">
                <table class="min-w-full text-center bg-gray-700">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b border-gray-600">Photo ID</th>
                            <th class="py-2 px-4 border-b border-gray-600">Title</th>
                            <th class="py-2 px-4 border-b border-gray-600">Date Uploaded</th>
                            <th class="py-2 px-4 border-b border-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-600">1</td>
                            <td class="py-2 px-4 border-b border-gray-600">Wedding</td>
                            <td class="py-2 px-4 border-b border-gray-600">01/11/2024</td>
                            <td class="py-2 px-4 border-b border-gray-600">
                                <div class="flex justify-center space-x-2">
                                    <button class="bg-blue-500 text-white px-2 py-1 rounded">View</button>
                                    <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                                    <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b border-gray-600">2</td>
                            <td class="py-2 px-4 border-b border-gray-600">Nature</td>
                            <td class="py-2 px-4 border-b border-gray-600">01/11/2024</td>
                            <td class="py-2 px-4 border-b border-gray-600">
                                <div class="flex justify-center space-x-2">
                                    <button class="bg-blue-500 text-white px-2 py-1 rounded">View</button>
                                    <button class="bg-green-500 text-white px-2 py-1 rounded">Edit</button>
                                    <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
        
</div>
  @endsection
      