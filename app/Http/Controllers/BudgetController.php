<?php

namespace App\Http\Controllers;

use App\Models\CameraMan;
use App\Models\Category;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(){
        $data['category']=Category::all();
        
        return view('public.budget',$data);
    }

    public function BudgetView(){
        $data['camera']=CameraMan::all();
        $data['category']=Category::all();
        return view('admin.budgetprice',$data);
    }
    public function CategoryPrice(Request $request){
        
        $cameraMan = new CameraMan();
        $cameraMan->cam_category=$request->cam_category;
        $cameraMan->cam_price=$request->cam_price;
        $cameraMan->save(); 
    }
    public function BudgetCal(Request $request){
        $eventType = $request->evtcat;
        $eventMember = $request->evtmem;
        $eventCameraman = $request->evtcam;
       
         $data['category'] = CameraMan::where('cam_category', $eventType)->first();
         $totalCameraMan=$data['category']->cam_price*$eventCameraman;
         
         $budget=($eventMember/5)*$totalCameraMan;

         dd($budget);

         
        
        
    }
}
