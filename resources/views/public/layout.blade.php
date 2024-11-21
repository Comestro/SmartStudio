<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Capture your perfect moments with Smart Studio. Our skilled photographer offers personalized sessions and stunning visuals. Explore our portfolio and book your session today!')">
    <title>@yield('title', 'Home Page')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" href="{{ asset('images/i.png') }}" type="image/png">


    @livewireStyles
</head>

<body class="bg-white">
    <div class=" flex flex-col md:flex-row ">
        @include('public.includes.sidebar')


        @section('content')

        @show
    </div>
    @include('public.includes.footer')

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

@livewireScripts

</html>