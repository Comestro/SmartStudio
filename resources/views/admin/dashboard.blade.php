@extends('admin.adminBase')
@section('content')
 <style>
        .bar-chart {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            height: 200px;
            padding: 0 20px 0 20px;
        }

        .bar {
            width: 10%;
            background-color: #e3dd2b;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            transition: background-color 0.3s;
        }

        .bar:hover {
            background-color: #6e7818;
        }

        .bar span {
            writing-mode: vertical-rl;
            transform: rotate(270deg);
            padding: 5px;
            color: white;
            font-size: 14px;
        }
        
    </style>  
<div class="w-[80%] h-auto bg-black">
  {{-- nav --}}
  <div class="w-full h-auto bg-[#2f363e] flex flex-col md:flex-row items-center p-4">
      <div class="w-full md:w-1/3 h-auto flex items-center justify-center mb-2 md:mb-0">
      </div>
      <div class="w-full md:w-1/3 h-auto  p-2 flex items-center justify-center">
          <div class="relative w-full">
              <input type="text" placeholder="Search..." class="w-full pl-4 pr-10 py-2 bg-white rounded-full focus:outline-none border border-yellow-400">
              <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                  <button class="p-2 rounded-full text-black">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.415l4.243 4.243-1.414 1.415-4.243-4.243zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                      </svg>
                  </button>
              </div>
          </div>
      </div>
      <div class="absolute right-4 top-4 w-full md:w-auto h-auto flex items-center gap-2">
   
    <div class="w-full md:w-24 h-10 rounded-lg flex items-center justify-center text-center">
    <form action="{{ route('logout') }}" method="POST" class="w-full">
    @csrf
    <button type="submit" class="text-base font-semibold text-yellow-500 border border-yellow-400 px-2 py-2 rounded-lg flex items-center justify-center hover:bg-yellow-500 hover:text-black transition duration-300 ease-in-out">
        <i class="bi bi-box-arrow-right mr-2"></i>
        Logout
    </button>
</form>

    </div>

    <!-- Profile Image -->
    <div class="w-12 h-12 rounded-full flex items-center justify-center">
        <img src="https://pics.craiyon.com/2023-11-26/oMNPpACzTtO5OVERUZwh3Q.webp" class="rounded-full" alt="Profile Picture"/>
    </div>
</div>

  </div>

  
  
  {{-- Dashboard --}}
  <div class="p-6  flex-1">
      <h1 class="text-2xl font-bold text-yellow-500">Dashboard <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h1>
      
      
      <!-- <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
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
      </div> -->
      
      <!-- <div class="grid grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 mt-4 gap-6">
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

         
      </div> -->
      
      <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 mt-4 gap-6">
   
    <div class="bg-white p-6 rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-gray-900">Total categories</h2>
            <span class="text-yellow-400 text-xl font-bold">+4%</span>
        </div>
        <div class="text-4xl font-bold text-gray-900">85</div>
        <div class="mt-4">
            <div class="h-2 w-full bg-gray-700 rounded-full">
                <div class="h-2 bg-yellow-400 rounded-full" style="width: 35%;"></div>
            </div>
        </div>
        <p class="text-gray-900 mt-2">Lorem ipsum dolor sit amet...</p>
        <button class="mt-4 px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500">View Details</button>
    </div>
    
  
    <div class="bg-white p-6 rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-gray-900">Total Albums</h2>
            <span class="text-yellow-400 text-xl font-bold">+8%</span>
        </div>
        <div class="text-4xl font-bold text-gray-900">850</div>
        <div class="mt-4">
            <div class="h-2 w-full bg-gray-700 rounded-full">
                <div class="h-2 bg-yellow-400 rounded-full" style="width: 75%;"></div>
            </div>
        </div>
        <p class="text-gray-900 mt-2">Lorem ipsum dolor sit amet...</p>
        <button class="mt-4 px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500">View Details</button>
    </div>
    
  
    <div class="bg-white p-6 rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-bold text-gray-900">Total Clients</h2>
            <span class="text-yellow-400 text-xl font-bold">+10%</span>
        </div>
        <div class="text-4xl font-bold text-gray-900">1,250</div>
        <div class="mt-4">
            <div class="h-2 w-full bg-gray-900 rounded-full">
                <div class="h-2 bg-yellow-400 rounded-full" style="width: 60%;"></div>
            </div>
        </div>
        <p class="text-gray-900 mt-2">Lorem ipsum dolor sit amet...</p>
        <button class="mt-4 px-4 py-2 bg-yellow-400 text-gray-900 rounded-lg hover:bg-yellow-500">View Details</button>
    </div>
</div>

   
       <!-- <div class="mt-8 bg-gray-800 p-6 rounded-lg shadow-md text-yellow-500">
  <h2 class="text-lg font-semibold">Recent Photo Uploads</h2>
  <div class="mt-4 overflow-x-auto">
      <div class="flex space-x-4 min-w-full">
          <img src="../images/user_profile.png" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
          <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
          <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
          <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
          <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
          <img src="../images/bride.jpg" alt="" class="w-48 h-48 object-cover rounded-lg shadow-md flex-shrink-0">
      </div>
  </div>
   </div> -->

   <div class="p-6 flex-1 mt-5 ">
      <h1 class="text-2xl font-bold text-yellow-500">Recent Photo Uploads  <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h1>
   </div>
 
   <div class="mt-8 bg-gradient-to-r from-purple-600 via-indigo-500 to-blue-600 p-8 rounded-xl shadow-xl text-white">
  <!-- <h2 class="text-2xl font-semibold mb-6">Recent Photo Uploads</h2> -->
  <div class="mt-4 overflow-x-auto">
      <div class="flex space-x-6 min-w-full">
          <div class="group relative">
              <img src="https://th.bing.com/th?id=OIP.PztowP3ljup0SM75tkDimQHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.3&pid=3.1&rm=2" alt="Profile Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
              <div class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
          </div>
          <div class="group relative">
              <img src="https://th.bing.com/th/id/OIP.X4GQPxf-fjG2DMaopTUJswAAAA?w=208&h=313&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Bride Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
              <div class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
          </div>
          <div class="group relative">
              <img src="https://th.bing.com/th/id/OIP.w0ivEF7TEbjLUS-N2_g2QAHaEo?w=264&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Bride Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
              <div class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
          </div>
          <div class="group relative">
              <img src="https://th.bing.com/th/id/OIP.RwnvpzSdVxxg663QU3njvAHaLw?w=124&h=184&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Bride Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
              <div class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
          </div>
          <div class="group relative">
              <img src="https://th.bing.com/th/id/OIP.VOB_2CiLZ6FSNWDMMGdQKAHaLe?w=200&h=311&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Bride Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
              <div class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
          </div>
          <div class="group relative">
              <img src="https://th.bing.com/th/id/OIP.4pqwwOAbfPOlIyMTXu7Y6wHaLZ?w=201&h=310&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Bride Image" class="w-48 h-48 object-cover rounded-lg shadow-lg transition-transform transform group-hover:scale-105">
              <div class="absolute inset-0 bg-black bg-opacity-30 opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
          </div>
      </div>
  </div>
</div>

      

<!--       
        <div class="flex flex-col md:flex-row w-full h-auto gap-4">
         
          <div class="mt-4 w-full md:w-1/2">
              <div class="bg-gray-800 p-4 rounded-lg shadow-md text-yellow-500">
                  <h2 class="text-lg font-semibold text-center">Album Creation Over Time</h2>
                  <div class="h-60 mt-4 bg-yellow-400 rounded-lg">
                      <div class="bar-chart flex justify-between items-end h-full p-2 bg-white">
                          <div class="bar  flex flex-col items-center" style="height: 40%;">
                              <span class="block text-xs text-center">M</span>
                          </div>
                          <div class="bar  flex flex-col items-center" style="height: 70%;">
                              <span class="block text-xs text-center ">T</span>
                          </div>
                          <div class="bar  flex flex-col items-center" style="height: 50%;">
                              <span class="block text-xs text-center">W</span>
                          </div>
                          <div class="bar  flex flex-col items-center" style="height: 80%;">
                              <span class="block text-xs text-center ">T</span>
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
          
          <div class="mt-4 w-full md:w-1/2">
              <div class="bg-gray-800 p-4 rounded-lg shadow-md text-yellow-500">
                  <h2 class="text-lg font-semibold text-center">Album Creation Over Time</h2>
                  <div class="h-60 mt-4 bg-gray-700 rounded-lg relative flex items-end justify-around gap-2">
                     
                      <div class="absolute left-0 bottom-0 h-full w-0.5 bg-white"></div>  Moved to left-0 
                      <div class="absolute left-0 bottom-0 w-[calc(100%-8px)] h-0.5 bg-white"></div>
          
                    
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
           </div> -->
          

           <div class="p-6 flex-1 mt-5 ">
      <h1 class="text-2xl font-bold text-yellow-500">Graph <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h1>
   </div>
           <div class="flex flex-col md:flex-row w-full h-auto gap-6">
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

               
                <div class="w-8 bg-green-400 h-1/6 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-2/6 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-3/6 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-4/6 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-5/6 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-1/3 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-1/2 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-2/3 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-5/6 rounded transition-all hover:scale-105 hover:bg-green-300"></div>
                <div class="w-8 bg-green-400 h-full rounded transition-all hover:scale-105 hover:bg-green-300"></div>
            </div>
        </div>
    </div>
</div>

          
          
      </div> 
       
<!--       
       <div class="mt-8 bg-gray-800 p-2 rounded-lg shadow-md text-gray-100">
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
       
  </div> -->
  <div class="mt-8 bg-black p-4 px-8 rounded-lg shadow-md text-gray-100">
    <h2 class="text-xl font-bold  pb-2 text-yellow-400">Recent Photos  <i class="bi bi-arrow-right-circle-fill text-2xl ml-2"></i></h2>
     <div class="mt-4 overflow-x-auto">
        <table class="min-w-full text-center bg-gray-700 rounded-lg overflow-hidden shadow-lg">
            <thead>
                <tr class="bg-gray-900 text-gray-300">
                    <th class="py-3 px-5 border-b border-gray-600">Photo ID</th>
                    <th class="py-3 px-5 border-b border-gray-600">Title</th>
                    <th class="py-3 px-5 border-b border-gray-600">Date Uploaded</th>
                    <th class="py-3 px-5 border-b border-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-gray-800 hover:bg-gray-700 transition duration-200 ease-in-out">
                    <td class="py-3 px-5 border-b border-gray-600">1</td>
                    <td class="py-3 px-5 border-b border-gray-600">Wedding</td>
                    <td class="py-3 px-5 border-b border-gray-600">01/11/2024</td>
                    <td class="py-3 px-5 border-b border-gray-600">
                        <div class="flex justify-center space-x-2">
                            <button class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-md">View</button>
                            <button class="bg-green-600 hover:bg-green-500 text-white px-3 py-1 rounded-md">Edit</button>
                            <button class="bg-red-600 hover:bg-red-500 text-white px-3 py-1 rounded-md">Delete</button>
                        </div>
                    </td>
                </tr>
                <!-- Additional rows here -->
            </tbody>
        </table>
    </div>
</div>



</div>
@endsection 
    