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
                'b_image' => 'required|image|mimes:jpeg,png,jpg,svg,avif,webp',
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
    public function edit($id)
{
    $banner = Banner::findOrFail($id);
    return view('admin.banner.editBanner', compact('banner'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'b_name' => 'required',
            'b_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,avif,webp|max:2048',
            'status' => 'required|string',
        ]);
    
        $banner = Banner::findOrFail($id);
        $banner->b_name = $request->b_name;
        $banner->status = $request->status;
    
        if ($request->hasFile('b_image')) {
            // Delete the old image if it exists
            if (file_exists(public_path('images/' . $banner->b_image))) {
                unlink(public_path('images/' . $banner->b_image));
            }
    
            // Upload the new image
            $image = $request->file('b_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
    
            // Update the image name in the database
            $banner->b_image = $imageName;
        }
    
        $banner->save();
    
        return redirect()->route('admin.banners.index')->with('msg', 'Banner updated successfully.');
    }

   

    public function trashBanner($id){
        $data =Banner::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('msg','moved to trash bin');
    
    
    }
}
