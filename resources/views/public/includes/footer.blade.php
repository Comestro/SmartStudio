<div class="flex flex-col bg-gradient-to-b from-gray-900 to-black text-white p-8 gap-8">
    <!-- Main Content Container -->
    <div class="flex flex-col md:flex-row justify-between gap-8">
        <!-- Logo and Description -->
        <div class="flex flex-col items-center md:items-start md:w-1/3 text-center md:text-left space-y-4">
            <a href="{{ route('home') }}">
                <img src="https://tse2.mm.bing.net/th?id=OIP.tEQ4HAiipGQ6oKYkdUGS8QHaHa&pid=Api&P=0&h=180" 
                     alt="Logo" class="rounded-full w-32 h-32 object-cover shadow-lg hover:scale-105 transition duration-300">
            </a>
            <p class="text-sm leading-relaxed">
                We provide exceptional photography services that capture your moments beautifully.
            </p>
        </div>

        <!-- Instagram Gallery -->
        <div class="flex flex-col items-center md:w-1/3 mt-8 md:mt-0 text-center space-y-4">
            <h1 class="text-yellow-500 text-xl font-semibold">Insta Gallery</h1>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <img src="https://tse1.mm.bing.net/th?id=OIP.J0EyMPxp69oUBURsRtCqEwHaE7&pid=Api&P=0&h=180" 
                     alt="Image 1" class="w-24 h-24 object-cover rounded-md shadow-md hover:scale-105 transition duration-300 cursor-pointer"onclick="openFullScreen(this)">
                <img src="https://tse2.mm.bing.net/th?id=OIP.n1Ft5hFRPdgmYJQO-Fz3HgHaEK&pid=Api&P=0&h=180" 
                     alt="Image 2" class="w-24 h-24 object-cover rounded-md shadow-md hover:scale-105 transition duration-300 cursor-pointer"onclick="openFullScreen(this)">
                <img src="https://tse1.mm.bing.net/th?id=OIP.ZAzbO8SsQk5J40oI55OAIAHaE7&pid=Api&P=0&h=180" 
                     alt="Image 3" class="w-24 h-24 object-cover rounded-md shadow-md hover:scale-105 transition duration-300 cursor-pointer"onclick="openFullScreen(this)">
                <img src="https://tse2.mm.bing.net/th?id=OIP.49hIyMLKW4_HMjUK_PBZlQHaFD&pid=Api&P=0&h=180" 
                     alt="Image 4" class="w-24 h-24 object-cover rounded-md shadow-md hover:scale-105 transition duration-300 cursor-pointer"onclick="openFullScreen(this)">
            </div>
            <div id="fullscreenModal" class="fixed inset-0 bg-black bg-opacity-75 hidden flex justify-center items-center z-50 ">
                <img id="fullscreenImage" 
                 class="w-[50rem] h-[30rem] object-cover rounded-lg" 
                 alt="Fullscreen Image">
                
                <button id=""
                    class="absolute top-4 right-4 text-white transition p-2 rounded-full bg-black bg-opacity-50 hover:bg-opacity-75">
                    <i class="bi bi-x-circle-fill text-2xl text-white"></i>
                </button>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="flex flex-col items-center  md:w-1/3 text-center  space-y-4">
            <h1 class="text-yellow-500 text-xl font-semibold">Contact</h1>
            <p class="text-sm">Phone: <a href="tel:+919546784398" class="hover:text-yellow-400">+91 9546784398</a></p>
            <p class="text-sm">Email: <a href="mailto:smartstudio@gmail.com" class="hover:text-yellow-400">smartstudio@gmail.com</a></p>
            <div class="flex space-x-4 mt-4">
                <a href="https://facebook.com" class="text-yellow-500 hover:text-yellow-400 text-2xl">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://api.whatsapp.com/send?phone=+91-9472641988&text=Hello,%20I%20am%20interested%20in%20booking%20a%20photography%20session.%20Could%20you%20please%20share%20the%20availability?" 
                   target="_blank" class="text-yellow-500 hover:text-yellow-400 text-2xl">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="https://instagram.com" class="text-yellow-500 hover:text-yellow-400 text-2xl">
                    <i class="bi bi-instagram"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <footer class="text-center text-gray-400 border-t border-gray-700 pt-4">
        <p>&copy; 2024 Smart Studio. All Rights Reserved.</p>
    </footer>
</div>
