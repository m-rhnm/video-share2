<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideosRequest;
use App\Http\Requests\UpdateVideosRequest;

class VideoController extends Controller
{
    public function index()
    {
     $mostViewsVideos = Video::all()->random(6);
     $mostPopularVideos = Video::all()->random(6);
     return view("index", compact("mostPopularVideos","mostViewsVideos"));
    }
    public function create()
    {
       return view("video/create");
    }
    public function store(StoreVideosRequest $request)
    {
       Video::create($request->all());
       return redirect()->route("index")->with('alert','video upload succesfully');
    }
    public function show(Request $request ,Video $video)
    {
    
      return view("video/show",compact("video"));
    }
    public function edit(Request $request ,Video $video)
    {
      return view("video/edit",compact("video"));
    }
    public function update(UpdateVideosRequest $request,Video $video)
    {
      $video->update($request->all());  
      return redirect()->route('videos.show', $video->slug)->with('alert','video update succesfully');
    }

}
