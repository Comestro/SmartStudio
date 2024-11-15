<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        $data['banners'] = Banner::all();
        return view('admin.banner.manageBanner', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.addBanner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'b_name' => 'required',
                'b_image' => 'required|image|mimes:jpeg,png,jpg,svg,avif',
                'status' => 'required|string'
            ]);

            $image = $request->file('b_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            $banner = new Banner();
            $banner->b_name = $request->b_name;
            $banner->b_image = $imageName;
            $banner->status = $request->status;
            $banner->save();
            return redirect()->route('admin.banners.index')->with("msg", "Banner Inserted Successfully");
        }
       
    }
    public function toggleStatus($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->status = !$banner->status;
        $banner->save();

        return redirect()->back()->with('msg', 'Banner status updated successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy($id)
    // {
    //     $banner=Banner::findOrFail($id);
    //     $banner->delete();

    //     return redirect()->back()->with('msg','banner deleted successfully');

    // }

    public function trashBanner($id){
        $data =Banner::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('msg','moved to trash bin');
    
    
    }
}
