<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photography</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
   
    @livewireStyles
</head>

<body class="bg-white min-h-screen">
 <div class=" flex flex-col md:flex-row ">
        @include('public.includes.sidebar')


        @section('content')

        @show
    </div>
        @include('public.includes.footer')

    
</body>

@livewireScripts

</html>