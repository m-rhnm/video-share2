<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
    $videos = Video::latest()->take(6)->get();
    $mostViewsVideos = Video::all()->random(6);
    $mostPopularVideos = Video::all()->random(6);
    return view("video.index", compact("videos","mostPopularVideos","mostViewsVideos"));
   }
   public function store()
   {
      return view("video.create");
   }
}
