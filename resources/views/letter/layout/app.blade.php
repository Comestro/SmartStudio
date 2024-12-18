 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/i.png') }}" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex w-full">
        <div id="sidebar" class="lg:block  lg:w-1/5 lg:pr-14 h-screen " >
            
            @include('admin.includes.sidebar')
            @include('admin.includes.sidebardesktop')
             {{-- Include your sidebar here --}}
            </div>
      
            <div class="flex-grow ">
                {{-- @include('admin.includes.navbar')  --}}
                <div class="w-full p-4">
                    @yield('content')
                </div>
            </div>
        </div>
       
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

@yield('js')
    </body>
    </html>
    
    
    
    
    
    