<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentsRequest;
use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;

class CommentController extends Controller
{ 
    public function __construct() {
        
        $this->middleware('auth');
    }
    public function store(StoreCommentsRequest $request,Video $video){
        
        $video->comments()->create([
            'user_id'=>auth()->id(),
            'video_id'=>$video->id,
            'body'=>$request->body
        ]);
        return back()->with('alert','your comment added');

    }
}
