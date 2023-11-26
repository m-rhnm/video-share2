<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Comment;
use App\Models\Category;
use App\services\VideoService;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVideosRequest;
use App\Http\Requests\UpdateVideosRequest;

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
      (new VideoService)->create($request->user(), $request->all());
      return redirect()->route("index")->with('alert','video upload succesfully');
    }
    public function show(Request $request ,Video $video,Comment $comment)
    {
      $video->load('comments.user');
      return view("video/show",compact("video"));
    }
    public function edit(Request $request ,Video $video)
    {
      $categories = Category::all();
      return view("video/edit",compact("video","categories"));
    }
    public function update(UpdateVideosRequest $request,Video $video)
    {
      (new VideoService)->update($video, $request->all());
      return redirect()->route('videos.show', $video->slug)->with('alert','video update succesfully');
    }
}
