<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
    }
    public function store(Request $request,string $likeable_type, $likeable_id){
    
        $likeable_id->likeBy(auth()->user());
        return back();
    
    }
}

