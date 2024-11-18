<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Category;
use App\Models\GalleryImage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function insertGallery(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'gallery_title' => 'required|string|max:255',
                'content' => 'nullable|string',
                'images' => 'required|array',
                'images.*' => 'image|mimes:jpeg,png,jpg,svg,webp|max:2048',
                'category_id' => 'required|exists:categories,id',
            ]);


            $gallery = new Gallery();
            $gallery->gallery_title = $request->gallery_title;
            $gallery->slug = $this->generateUniqueSlug($request->gallery_title);
            $gallery->content = $request->content;
            $gallery->category_id = $request->category_id;
            $gallery->save();

            $imageFiles = $request->file('images');
            foreach ($imageFiles as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                if ($image->move(public_path('images'), $imageName)) {

                    $galleryImage = new GalleryImage();
                    $galleryImage->gallery_id = $gallery->id;
                    $galleryImage->image_path = $imageName;
                    $galleryImage->save();
                } else {
                    return redirect()->back()->with('error', 'Failed to upload image.');
                }
            }

            return redirect()->back()->with("msg", "Gallery Inserted Successfully");
        }

        $data = [
            'categories' => Category::all(),
            'galleries' => Gallery::with('images')->get(),
        ];

        return view("admin.gallery", $data);
    }


    public function viewGallery($id)
    {
        $item = Gallery::with('images')->findOrFail($id);
        return view("admin.viewGallery", compact('item'));
    }

    private function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = Gallery::where('slug', 'LIKE', "{$slug}%")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    public function manageGallery(Request $request)
    {
        $data = [
            'categories' => Category::all(),
            'galleries' => Gallery::with('images', 'category')->get(),
        ];

        return view("admin.manageGallery", $data);
    }

    public function editGallery($id)
    {
        $gallery = Gallery::with('images', 'category')->findOrFail($id);
        $categories = Category::all();
        return view('admin.editGallery', compact('gallery', 'categories'));
    }

    public function updateGallery(Request $request, $id)
    {

        $validated = $request->validate([
            'gallery_title' => 'required|string|max:255',
            'content' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'images' => 'nullable|array',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        ]);
        $gallery = Gallery::findOrFail($id);

        $gallery->gallery_title = $request->gallery_title;
        $gallery->content = $request->content;
        $gallery->category_id = $request->category_id;

        if ($gallery->gallery_title != $request->gallery_title) {
            $gallery->slug = $this->generateUniqueSlug($request->gallery_title);
        }

        $gallery->save();

        if ($request->hasFile('images')) {
            $imageFiles = $request->file('images');
            foreach ($imageFiles as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                if ($image->move(public_path('images'), $imageName)) {
                    $galleryImage = new GalleryImage();
                    $galleryImage->gallery_id = $gallery->id;
                    $galleryImage->image_path = $imageName;
                    $galleryImage->save();
                } else {
                    return redirect()->back()->with('error', 'Failed to upload image.');
                }
            }
        }

        return redirect()->route('gallery.manageGallery')->with('msg', 'Gallery updated successfully.');
    }

    public function trashGallery($id)
    {
        $data = Gallery::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('msg', 'moved to trash bin');
    }

    public function deleteImage($imageId)
    {
        $image = GalleryImage::findOrFail($imageId);

        $image->delete();

        return redirect()->back()->with('msg', 'Image soft deleted successfully!');
    }
    public function galleryCalling()
    {
        $data = [
            'categories' => Category::all(),
            'galleries' => Gallery::with('images', 'category')->inRandomOrder()->limit(5)->get(),
            'galleryFirst'=>Gallery::with('images')->inRandomOrder()->first(),
            'galleryLast' => Gallery::with('images')->latest()->first(),


        ];
        
        
        return view("public.gallery", $data);
    }


}
