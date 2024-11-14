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
    
            return redirect()->back();
            
        }
   

    /**
     * Display the specified resource.
     */
    public function edit($id)
    {
        $youtubeVideo = YoutubeVideo::findOrFail($id);
    
        return view('admin.videos.edit', compact('youtubeVideo'));
    }
    
    public function update(Request $request, $id)
    {
        // Find the YouTube video by id
        $youtubeVideo = YoutubeVideo::findOrFail($id);
    
        // Validate and update the video details
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|url',
            'status' => 'required|boolean',
        ]);
    
        // Update video details
        $youtubeVideo->title = $request->title;
        $youtubeVideo->link = $request->link;
        $youtubeVideo->status = $request->status;
        $youtubeVideo->save();
    
        return redirect()->route('youtube-videos.index')->with('msg', 'Video updated successfully!');
    }
    
    public function destroy($id)
    {
        // Find the YouTube video by id
        $youtubeVideo = YoutubeVideo::findOrFail($id);
    
        // Delete the video
        $youtubeVideo->delete();
    
        return redirect()->route('youtube-videos.index')->with('msg', 'Video deleted successfully!');
    }    public function toggleStatus($id)
    {
        $video = youtubeVideo::findOrFail($id);
        $video->status = !$video->status;
        $video->save();

        return redirect()->back()->with('msg', 'video status updated successfully.');
    }
}
