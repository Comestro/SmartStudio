<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>smartstudio SignUp</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="  bg-gradient-to-r from-yellow-500 via-yellow-300 to-black flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-4xl w-full flex flex-col md:flex-row">
        <div class="md:w-1/2 relative">
            <img src="./images/user_profile.png" alt="" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center p-4">
                <h2 class="text-4xl font-bold">Smart Studio</h2>
                <p class="mt-2 text-lg uppercase">Click for the shoot</p>
                <p class="mt-8 text-sm uppercase">Journey everywhere</p>
            </div>
        </div>
        <div class="md:w-1/2 p-8">
            <h2 class="text-3xl font-bold text-black mb-2 ">Sign Up</h2>
            <p class="text-sm text-gray-500 mb-6 uppercase">Click For Your Shoot</p>
            <form action="{{ route('register.submit') }}" class="space-y-4" method="POST">
                @csrf
                <div class="flex items-center">
                    <label for="" class="w-1/4 text-sm font-semibold text-gray-700">Name</label>
                    <input type="text" name="name" id="" class="p-2.5 w-3/4 border border-gray-300 rounded focus:outline-none focus:border-yellow-500">
                </div>
                <div class="flex items-center">
                    <label for="" class="w-1/4 text-sm font-semibold text-gray-700">Email</label>
                    <input type="email" id="" name="email" class="p-2.5 w-3/4 border border-gray-300 rounded focus:outline-none focus:border-yellow-500">
                </div>
                <div class="flex items-center">
                    <label for="" class="w-1/4 text-sm font-semibold text-gray-700">Phone No.</label>
                    <input type="text" name="phone_no" id="" class="p-2.5 w-3/4 border border-gray-300 rounded focus:outline-none focus:border-yellow-500">
                </div>
               
               
                
                <div class="flex items-center">
                    <label for="" class="w-1/4 text-sm font-semibold text-gray-700">Password</label>
                    <input type="password" name="password" id="" class="p-2.5 w-3/4 border border-gray-300 rounded focus:outline-none focus:border-yellow-500">
                </div>
                
               
                <div class="flex justify-between mt-8">
                    <button type="button" class="px-6 py-2 bg-gray-400 text-white rounded-md hover:bg-gray-500">Cancel</button>
                    <button type="submit" class="px-6 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600">Confirm</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>