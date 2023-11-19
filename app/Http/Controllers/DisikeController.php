<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisikeController extends Controller
{
    public function __construct() {
        
        $this->middleware('auth');
    }
    public function store(Request $request,string $likeable_type, $likeable_id){
        $likeable_id->dislikeBy(auth()->user());
        return back();
    }
    
}
