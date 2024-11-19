@extends('public.layout')
@section('content')
 <div class="flex items-center justify-center w-full h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900">


    <div class="bg-gray-800 shadow-2xl rounded-lg p-8 max-w-md w-full border border-gray-700">
        <h2 class="text-3xl font-semibold text-center mb-8 text-gray-100">Event Budget Calculator</h2>

        <form class="space-y-6" action="" method="post">
            @csrf
            <!-- Event Type -->
            <div>
                <label for="options" class="block text-sm font-medium text-gray-400">Select the Event Type</label>
                <select id="options" name="evtcat" class="mt-2 block w-full px-4 py-3 border border-gray-600 bg-gray-700 text-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150" onchange="calculateBudget()">
                    <option value="null" class="text-gray-500">Select an option</option>
                    @foreach ($category as $cat)
                    <option value="{{ $cat->cat_name }}" class="text-gray-300">{{ $cat->cat_name }}</option>
                    @endforeach
                </select>
                @error('evtcat')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- Number of People -->
            <div>
                <label for="number1" class="block text-sm font-medium text-gray-400">Number of people in the event</label>
                <input type="number" id="number1" name="evtmem" class="mt-2 block w-full px-4 py-3 bg-gray-700 border border-gray-600 text-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150 placeholder-gray-500" placeholder="Enter number here" oninput="calculateBudget()">
                @error('evtmem')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- Number of Cameramen -->
            <div>
                <label for="number2" class="block text-sm font-medium text-gray-400">Number of cameramen you want</label>
                <input type="number" id="number2" name="evtcam" class="mt-2 block w-full px-4 py-3 bg-gray-700 border border-gray-600 text-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150 placeholder-gray-500" placeholder="Enter number here" oninput="calculateBudget()">
                @error('evtcam')
                <p>{{$message}}</p>
                @enderror
            </div>

            <!-- Budget Display -->
            <div id="result" class="text-lg font-semibold text-center mt-8 text-gray-200">
                Estimated Budget: <span id="budgetOutput">₹{{$budget ? $budget : 0000}}</span>
            </div>

            <!-- Reset Button -->
            <div>
                <button type="submit" class="w-full py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-800 transition duration-150 ease-in-out transform hover:-translate-y-0.5">calculate Budget</button>
            </div>
        </form>

    </div>
</div>



@endsection
