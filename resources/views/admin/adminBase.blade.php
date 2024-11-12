

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

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
</head>


<body>
    <div class="w-full h-full bg-[#000] flex">
        {{-- sidebar --}}
        <div class="w-[20%] h-auto bg-[#2f363e]">
            <div class="w-full h-16 flex items-center justify-center">
                <p class="text-3xl text-yellow-400 font-bold">SMART STUDIO</p>
            </div>
            <div class="w-full h-10 mt-6 text-base flex items-center pl-10 text-gray-500 font-semibold">
                <p>Main Menu</p>
            </div>
            <div class="w-full h-screen ">
                <div class="w-full h-full pl-10 mt-2">
                    <ul>
                        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 hover:border-r-8 border-yellow-500">
                            <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/eeeeee/dashboard-layout.png" alt="dashboard-layout" />
                            <a href="{{route('dashboard')}}" class="text-[#eee] font-medium text-lg">Dashboard</a>
                        </li>
        
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/fluency-systems-filled/50/eeeeee/event.png" alt="event" />
                                <span class="text-[#eee] font-medium text-lg">Event</span>
                            </summary>
                            <ul class="pl-8">
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Add Event</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="{{route('booking.show')}}" class="text-[#eee] font-medium text-md">Check Schedule</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Ordered List</a>
                                </li>
                                
                            </ul>
                        </details>
        
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/ios/50/FFFFFF/user-male-circle--v1.png" alt="user-male-circle--v1"/>                                <span class="text-[#eee] font-medium text-lg">Customer</span>
                            </summary>
                            <ul class="pl-8">
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Add Customer</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Manage Customers</a>
                                </li>
                            </ul>
                        </details>
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/eeeeee/dashboard-layout.png" alt="dashboard-layout" />
                                <a href="{{route('category')}}" class="text-[#eee] font-medium text-lg">Category</a>
                            </summary>
                            
                        </details>
                        <details class="mt-2">
                            <summary class="flex items-center gap-3 cursor-pointer hover:bg-gray-700 hover:border-r-8 border-yellow-500 p-2 rounded transition duration-300">
                                <img width="24" height="24" src="https://img.icons8.com/ios/50/FFFFFF/user-male-circle--v1.png" alt="user-male-circle--v1"/> 
                                <span class="text-[#eee] font-medium text-lg">Gallery</span>
                            </summary>
                            <ul class="pl-8">
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="{{route('gallery')}}" class="text-[#eee] font-medium text-md">Add Gallery</a>
                                </li>
                                <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300">
                                    <a href="" class="text-[#eee] font-medium text-md">Manage Gallery</a>
                                </li>
                            </ul>
                        </details>
                        
                        <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                            <img width="24" height="24" src="https://img.icons8.com/ios-filled/50/eeeeee/settings.png" alt="settings" />
                            <a href="" class="text-[#eee] font-medium text-lg">Settings</a>
                        </li>
                         <li class="flex items-center gap-3 hover:bg-gray-700 p-2 rounded transition duration-300 mt-2 hover:border-r-8 border-yellow-500">
                            <img width="24" height="24" src="https://img.icons8.com/ios-filled/50/eeeeee/settings.png" alt="settings" />
                            <a href="{{route('admin.contact.list')}}" class="text-[#eee] font-medium text-lg">Contact List</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
          
        </div>
        
        
        @section('content')
            
        @show
        
    
      
    </div>

    
</body>
</html>
