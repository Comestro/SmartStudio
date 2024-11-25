

@section('title','Budget Calculator')
@extends('public.base')

@section('content')

@section('meta_description')
Find the perfect photography package for your budget at Smart Studio. We offer a range of options to fit your needs and ensure quality results.
@endsection

<div class=" mt-32   w-full"  >
       

    <div class=" justify-center items-center px-4 mb-8">
        
        <form class="w-full max-w-lg mx-auto p-6 bg-gray-800 h-[500px] rounded-lg shadow-lg" action="" method="post">
            @csrf
            <h2 class="text-3xl font-semibold text-center mb-8 text-yellow-500">Event Budget Calculator</h2>
            <div class="mt-2">
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

           
            <div class="mt-2">
                <label for="number1" class="block text-sm font-medium text-gray-400">Number of people in the event</label>
                <input type="number" id="number1" name="evtmem" class="mt-2 block w-full px-4 py-3 bg-gray-700 border border-gray-600 text-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150 placeholder-gray-500" placeholder="Enter number here" oninput="calculateBudget()">
                @error('evtmem')
                <p>{{$message}}</p>
                @enderror
            </div>

            <div class="mt-2">
                <label for="number2" class="block text-sm font-medium text-gray-400">Number of cameramen you want</label>
                <input type="number" id="number2" name="evtcam" class="mt-2 block w-full px-4 py-3 bg-gray-700 border border-gray-600 text-gray-200 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-150 placeholder-gray-500" placeholder="Enter number here" oninput="calculateBudget()">
                @error('evtcam')
                <p>{{$message}}</p>
                @enderror
            </div>

           
            <div id="result" class="text-lg font-semibold text-center mt-8 text-gray-200">
                Estimated Budget: <span id="budgetOutput">₹{{$budget ? $budget : 0000}}</span>
            </div>

          
            <div class="mt-4">
                <button type="submit" class="w-full py-2 sm:py-3  bg-gradient-to-r from-yellow-400 via-yellow-300 to-yellow-200 text-black font-semibold  rounded-lg hover:bg-yellow-400 transition duration-300">Calculate Budget</button>
            </div>
        </form>

</div>
@endsection
