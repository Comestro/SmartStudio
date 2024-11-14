<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PHPUnit\TextUI\XmlConfiguration\UpdateSchemaLocation;

class CategoryController extends Controller
{
public function manageCategory(Request $request)
{
    if ($request->isMethod('post')) {
        $request->validate([
            'cat_name' => 'required',
            'cat_description' => 'nullable|string',
            'cat_image' => 'required|image|mimes:jpeg,png,jpg,svg,webp',
        ]);

        $image = $request->file('cat_image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $category = new Category();
        $category->cat_name = $request->cat_name;
        $category->cat_slug = $this->generateUniqueSlug($request->cat_name);
        $category->cat_description = $request->cat_description;
        $category->cat_image = $imageName;
        $category->save();

        return redirect()->back()->with("msg", "Category Inserted Successfully");
    }

    $data['categories'] = Category::all();
    return view("admin.category", $data);
}

public function editCategory(Request $request, $id)
{
    $data = Category::find($id);
    return view("admin.categoryEdit", ["data" => $data]);
}

public function updateCategory(Request $request, $id)
{
    $validated = $request->validate([
        'cat_name' => 'required',
        'cat_description' => 'nullable|string',
        'cat_image' => 'image|mimes:jpeg,png,jpg,svg,webp',
    ]);

    $category = Category::findOrFail($id);

    if (!$category) {
        return redirect()->route('category')->with('error', 'Category not found.');
    }

    $category->cat_name = $request->cat_name;
    $category->cat_slug = $this->generateUniqueSlug($request->cat_name);
    $category->cat_description = $request->cat_description;

    if ($request->hasFile('cat_image')) {
        $image = $request->file('cat_image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $category->cat_image = $imageName;
    }

    $category->save();

    return redirect()->route('category')->with('success', 'Category updated successfully.');
}

private function generateUniqueSlug($name)
{
    $slug = Str::slug($name);
    $count = Category::where('cat_slug', 'LIKE', "{$slug}%")->count();
    return $count ? "{$slug}-{$count}" : $slug;
}
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
    
        return redirect()->route('category')->with('msg', 'Category deleted successfully!');
    }
}
