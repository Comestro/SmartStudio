<?php

namespace App\Http\Controllers;

use App\Models\AdInformation;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function index()
    {
        $data['items'] = AdInformation::all();
        return view('admin.Ads.manageAd',$data);
    }

    public function create()
    {
        return view('admin.Ads.insertAd');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required',
            'price' => 'required|numeric',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        AdInformation::create([
            'image' => $imagePath,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'price' => $request->price,
        ]);

        return redirect()->route('managead.index')->with('success', 'Item created successfully.');
    }

    // public function show(AdInformation $item)
    // {
    //     $data['items'] = AdInformation::find($item);
    //         dd($data['items']);
    //       return view('admin.Ads.editAd',$data);
    // }

    public function edit($item)
{
        $data['items'] = AdInformation::find($item);
        return view('admin.Ads.editAd',$data);
    }

    public function update(Request $request,  $item)
    {
        $request->validate([
            'image' => 'nullable|image',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required',
            'price' => 'required|numeric',
        ]);
        $items= AdInformation::find($item);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $items->update(['image' => $imagePath]);
        }


        $items->update(['title'=>$request->title,
        'description'=>$request->description,
        'status'=>$request->status,
        'price'=>$request->price,
        ]
        );

        return redirect()->route('managead.index')->with('success', 'Item updated successfully.');
    }

    public function destroy($item)
    {
        $data['items']=AdInformation::find($item);
        $data['items']->delete();
        return redirect()->route('managead.index')->with('success', 'Item deleted successfully.');
    }
}
