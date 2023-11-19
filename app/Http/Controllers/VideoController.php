<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Video;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideosRequest;
use App\Http\Requests\UpdateVideosRequest;
use App\Models\Comment;

class VideoController extends Controller
{
    public function index()
    {
     $mostViewsVideos = Video::all()->random(6)->load(['category', 'user']);
     $mostPopularVideos = Video::all()->random(6)->load(['category', 'user']);
     return view("index", compact("mostPopularVideos","mostViewsVideos"));
    }
    public function create()
    {
      $categories = Category::all();
       return view("video/create",compact("categories"));
    }
    public function store(StoreVideosRequest $request)
    {
       $request->user()->videos()->create($request->all());
       return redirect()->route("index")->with('alert','video upload succesfully');
    }
    public function show(Request $request ,Video $video,Comment $comment)
    {
      $video->load('comments.user');
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
