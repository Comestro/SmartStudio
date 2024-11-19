<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $data = [
        'categoryImage' => Category::all(),
        'galleries' => Gallery::with('images', 'category')->limit(4)->paginate(5),
    ];
    return view('admin.dashboard', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // public function manageGallery(Request $request)
    // {
    //     $data = [
    //         'categories' => Category::all(),
    //         'galleries' => Gallery::with('images', 'category')->get(),
    //     ];

    //     return view("admin.dashboard", $data);
    // }
}
