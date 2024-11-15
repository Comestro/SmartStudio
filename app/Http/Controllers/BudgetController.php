<?php

namespace App\Http\Controllers;

use App\Models\CameraMan;
use App\Models\Category;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function index(Request $request){
        $data['budget'] = false;
        if($request->isMethod('post')){
            $budgets = $this->BudgetCal($request);
            $data['budget'] = $budgets;
        }
        $data['category']=Category::all();  
    
        return view('public.budget',$data);
    }

    public function BudgetView(){
        $data['camera']=CameraMan::all();
        $data['category']=Category::all();
        return view('admin.budgetprice',$data);
    }
    public function BudgetEdit(CameraMan $id){

        $data['editId']=$id;
        $data['category']=Category::all();

        
        return view('admin.editbudgetprice',$data);
    }
    public function updateBudget(Request $request, $id){
        $id=CameraMan::find($id);

        $id->cam_category=$request->cam_category;
        $id->cam_price=$request->cam_price;
        $id->save(); 

        return redirect()->route('budget.show')->with('msg', 'Category Price Updated Successfully');
    }
    public function CategoryPrice(Request $request){
        
        $cameraMan = new CameraMan();
        $cameraMan->cam_category=$request->cam_category;
        $cameraMan->cam_price=$request->cam_price;
        $cameraMan->save();
        return redirect()->back(); 


    }
    public function BudgetCal(Request $request){
        $request->validate([
            'evtcat' => 'required',
            'evtmem' => 'required',
            'evtcam' => 'required'  
        ]);
        $eventType = $request->evtcat;
        $eventMember = $request->evtmem;
        $eventCameraman = $request->evtcam;
       
         $data['category'] = CameraMan::where('cam_category', $eventType)->first();
         $totalCameraMan=$data['category']->cam_price*$eventCameraman;
         
         $budget=($eventMember/5)*$totalCameraMan;

         return $budget;
    }
    public function destroy($id){
        $data=CameraMan::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('msg','delete budget succ');
    }
}
