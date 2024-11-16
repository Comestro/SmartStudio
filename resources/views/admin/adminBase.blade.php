{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
     <div class="w-full h-full bg-[#2f363e] flex">
       
        <div class="w-full sm:w-[20%] h-auto bg-[#2f363e]">
            <div class="w-full h-16 flex items-center justify-center">
                <p class="text-3xl text-yellow-500 font-bold">SMART STUDIO</p>
            </div>
            <div class="w-full h-10 mt-6 text-xl flex items-center pl-10 text-white font-bold">
                <p>Main Menu</p>
            </div>
            <div class="w-full h-screen ">
                @include('admin.includes.sidebar')

            </div>
        </div>
        
        @section('content')
        @show
        
    </div>
    
</body>
</html>  --}}


{{-- resources/views/admin/adminBase.blade.php --}}
{{-- resources/views/admin/adminBase.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
<script src="/js/app.js" defer></script>
</head>
<body class="bg-gray-900 text-gray-200">
    <div class="flex">
        <div id="sidebar" class="w-80 h-auto bg-[#2f363e] hidden md:block">
            @include('admin.includes.sidebar')  {{-- Include your sidebar here --}}
        </div>
        <div class="flex-grow">
            @include('admin.includes.navbar')  {{-- Include the navbar here --}}
            <div class="w-full p-4">
                @yield('content')
            </div>
        </div>
    </div>
   
</body>

</body>

</html>





