<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\GalleryImage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    public function insertGallery(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'gallery_title' => 'required|string|max:255',
                'slug' => 'required|string|max:255|unique:galleries,slug',
                'content' => 'nullable|string',
                'images' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
                'category_id' => 'required|exists:categories,id',
            ]);

            // Create a new gallery instance
            $gallery = new Gallery();
            $gallery->gallery_title = $request->gallery_title;
            $gallery->slug = Str::slug($request->gallery_title);
            $gallery->content = $request->content;
            $gallery->category_id = $request->category_id;
            $gallery->save();

            // Handle the image files upload
            $imageFiles = $request->file('images');
            foreach ($imageFiles as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName);

                // Save each image in the gallery_images table
                $galleryImage = new GalleryImage();
                $galleryImage->gallery_id = $gallery->id;
                $galleryImage->image_path = $imageName;
                $galleryImage->save();
            }

            return redirect()->back()->with("msg", "Gallery Inserted Successfully");
        }

        $data = [
            'categories' => Category::all(),
            'galleries' => Gallery::with('images')->get(),
        ];

        return view("admin.gallery", $data);
    }
    public function manageGallery(Request $request){
        $data = [
            'categories' => Category::all(),
            'galleries' => Gallery::with('images')->get(),
        ];

        return view("admin.manageGallery", $data);
    }
    public function deleteGallery($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();
    
        return redirect()->route('gallery.manageGallery')->with('msg', 'Gallery deleted successfully!');
    }
}
