<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>photography</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <style>
        .gallery {
            width: 85vw;
            height: 60vmin;
            display: flex;
            gap: 10px;
            margin: 0 auto;
        }

        .gallery img {
            height: 100%;
            flex: 1;
            object-fit: cover;
            overflow: hidden;
            cursor: pointer;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .gallery img:hover {
            flex: 4;
        }


        @media (max-width: 768px) {
            .gallery {
                flex-direction: column;
                height: auto;
            }

            .gallery img {
                height: auto;
                width: 100%;
            }
        }

        .gallery {
            width: 85vw;
            height: 60vmin;
            display: flex;
            gap: 10px;
            margin: 0 auto;
        }

        .gallery img {
            height: 100%;
            flex: 1;
            object-fit: cover;
            overflow: hidden;
            cursor: pointer;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .gallery img:hover {
            flex: 4;
        }


        @media (max-width: 768px) {
            .gallery {
                flex-direction: column;
                height: auto;
            }

            .gallery img {
                height: auto;
                width: 100%;
            }
        }
    </style>
    @livewireStyles
</head>

<body class="bg-white min-h-screen">
    <div class="h-180 flex flex-col md:flex-row">
        @include('public.sidebar')


        @section('content')

        @show

        @include('public.footer')

    </div>
</body>
@livewireScripts

</html>
