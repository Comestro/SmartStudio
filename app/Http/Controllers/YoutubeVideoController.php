<?php

namespace App\Http\Controllers;

use App\Models\youtubeVideo;
use Illuminate\Http\Request;

class YoutubeVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['videos']=youtubeVideo::all();
        return view('admin.youtubeVideos.manageVideos',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['videos'] = YoutubeVideo::all();

        return view('admin.youtubeVideos.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
   
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'link' => 'required|url',
                'status' => 'required|boolean', 

            ]);
    
            YoutubeVideo::create($request->all());
    
            return redirect()->route('youtube-videos.index');
            
        }
   

    /**
     * Display the specified resource.
     */
    public function show(youtubeVideo $youtubeVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(youtubeVideo $youtubeVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, youtubeVideo $youtubeVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(youtubeVideo $youtubeVideo)
    {
        //
    }
}
