@section('title','Booking')
@extends('public.layout')

@section('content')
    <!-- Main Content -->
    <div class="w-full flex flex-col items-center p-6 bg-black">
        <!-- Categories Section -->
        <div class="bg-gradient-to-r from-gray-700 to-gray-500 h-auto p-6 rounded-lg shadow-lg w-full max-w-5xl">
            <div
                class="flex justify-between items-center bg-gradient-to-r from-yellow-400 to-yellow-200 text-gray-800 p-4 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold">Categories</h2>
            </div>

            <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-6">
                @foreach ($bookcat as $cat)
                    <a href="{{ route('category.name', $cat->cat_name) }}"
                        class="bg-gradient-to-b from-gray-600 to-gray-800 shadow-lg rounded-lg p-4 transform hover:scale-105 transition-transform duration-300">
                        <img src="{{ asset('images/category/' . $cat->cat_image) }}" alt="Category Image"
                            class="w-full h-40 object-cover rounded-md mb-4">
                        <h3 class="text-lg text-center text-yellow-400 font-semibold mb-3 capitalize">
                            {{ $cat->cat_name }}
                        </h3>
                       
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Booking Calendar Section -->
        <div class="w-full flex justify-center py-6">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-5xl w-full">
                <h1 class="text-3xl font-bold text-center mb-6">Booking Calendar</h1>

                <div class="flex justify-between items-center mb-4">
                    <button id="prevMonth" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                        &lt; Previous
                    </button>
                    <h2 id="monthYear" class="text-xl font-semibold"></h2>
                    <button id="nextMonth" class="px-4 py-2 bg-gray-300 rounded hover:bg-gray-400">
                        Next &gt;
                    </button>
                </div>

                <div id="calendar" class="grid grid-cols-7 gap-2 text-center">
                    <!-- Calendar days will render here -->
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookings = @json($bookings);
            const calendar = document.getElementById('calendar');
            const monthYear = document.getElementById('monthYear');
            const prevMonth = document.getElementById('prevMonth');
            const nextMonth = document.getElementById('nextMonth');

            let currentDate = new Date();

            // Function to render the calendar
            function renderCalendar(date) {
                calendar.innerHTML = '';
                const year = date.getFullYear();
                const month = date.getMonth();
                const firstDay = new Date(year, month, 1).getDay();
                const daysInMonth = new Date(year, month + 1, 0).getDate();

                // Update month and year in the header
                const monthNames = [
                    'January', 'February', 'March', 'April', 'May',
                    'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ];
                monthYear.textContent = `${monthNames[month]} ${year}`;

                // Create empty slots for days before the 1st of the month
                for (let i = 0; i < firstDay; i++) {
                    const emptySlot = document.createElement('div');
                    emptySlot.className = 'p-4';
                    calendar.appendChild(emptySlot);
                }

                // Create day elements
                for (let day = 1; day <= daysInMonth; day++) {
                    const dateStr = new Date(year, month, day).toISOString().split('T')[0];
                    const isBooked = bookings.includes(dateStr);

                    const dayEl = document.createElement('div');
                    dayEl.className = `p-4 rounded-lg font-semibold ${
                        isBooked ? 'bg-red-500 text-white' : 'bg-gray-200'
                    } hover:bg-gray-300 transition duration-200`;
                    dayEl.textContent = day;

                    calendar.appendChild(dayEl);
                }
            }

            // Event listeners for navigation buttons
            prevMonth.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar(currentDate);
            });

            nextMonth.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar(currentDate);
            });

            // Initial render
            renderCalendar(currentDate);
        });
    </script>
@endsection
