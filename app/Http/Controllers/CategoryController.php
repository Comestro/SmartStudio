<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function manageCategory(Request $request){
        if ($request->isMethod('post')) {
        $request->validate([
            'cat_name'=>'required',
            'cat_slug'=>'required',
            'cat_description'=>'nullable|string',
            'cat_image'=>'required|image|mimes:jpeg,png,jpg,svg',
           ]);
    
           
           $image = $request->file('cat_image');
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $image->move(public_path('images'), $imageName);
           
           $category=new Category();
           $category->cat_name = $request->cat_name;
           $category->cat_slug=str::slug($request->cat_name);
           $category->cat_description=$request->cat_description;
           $category->cat_image=$imageName;
           $category->save();
    
            return redirect()->back()->with("msg","Category Inserted Successfully");
        }
       
        $data['categories'] =Category::all();
        return view("admin.category",$data);
    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('category')->with('msg', 'Category deleted successfully!');
    }
}
