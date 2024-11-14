<!DOCTYPE html>
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
        {{-- sidebar --}}
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
</html> 



