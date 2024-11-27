<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function  index(){
        $data['bookcat']=Category::all();
        $data['bookings']=Booking::pluck('date');
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
            return redirect()->back()->with('success', 'Booking request successfully done  we will contact as soon as possible');

    }
    public function showBooking(){
        $data['bookings']=Booking::all();
        return view('admin.checkschedule',$data);
         
    }
   

}
