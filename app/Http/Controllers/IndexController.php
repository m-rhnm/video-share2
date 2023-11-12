<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index()
   {
    $mostViewsVideos = Video::all()->random(6);
    $mostPopularVideos = Video::all()->random(6);
    return view("index", compact("mostPopularVideos","mostViewsVideos"));
   }
   public function store()
   {
      return view("video.create");
   }
}
