<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\UpdateVideosRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use App\services\VideoService;
use App\Http\Controllers\Controller;
use App\Http\Resources\VideoResource;
use App\Http\Requests\StoreVideosRequest;
use App\Models\User;

class VideoController extends Controller
{
    public function show(Video $video)
    {
        return new VideoResource($video);
    }
    public function index(Video $video,Request $request)
    {
        $videos = $video->filter($request->all())->paginate();
        return  VideoResource::collection($videos);
    }
    public function store(StoreVideosRequest $request)
    {
        (new VideoService)->create(auth()->user(), $request->all());
        return response()->json
        ([
            "message"=> "video stored successfully"
        ],201);
    }
    public function update(UpdateVideosRequest $request,Video $video)
    {
        $this->authorize("update", $video);
        (new VideoService)->update($video, $request->all());
        return response()->json
        ([
            "message"=> "video updated successfully"
        ],200);
    }
    public function destroy(Video $video)
    {
        $this->authorize("update", $video);
        $video->comments()->delete();
        $video->delete();
        return response()->json
        ([
            "message"=> "video deleted successfully"
        ],200);
    }
}
