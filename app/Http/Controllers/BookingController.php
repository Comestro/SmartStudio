<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function  index(){
        $data['bookcat']=Category::all();
        return view('public.bookingcategory',$data);
    }

    public function store(Request $request){
       $data= $request->validate([
            'name'=>'required',
            'mobile'=>'required | min:10',
            'category'=>'required',
            'date'=>'required'
            ]);

            Booking::create($data);

    }
    public function showBooking(){
        $data['bookings']=Booking::all();
        return view('admin.checkschedule',$data);
    }
    
}
