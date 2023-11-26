<?php
namespace App\services;

use App\Models\User;
use App\Models\Video;
use App\services\FFmpegAdapter;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\File;

class VideoService 
{
    public function create(User $user,array $data )
    {
        $data = $this->putFile($data);
        return $user->videos()->create($data);
    }  
    public function update(Video $video,array $data) 
    {
        if($data['file'] instanceof File){
           $data = $this->putFile($data);
        }
        return $video->update($data);
    } 
    private function putFile(array $data)
    {
        $path = Storage::putFile('',$data['file']);
        $ffprobe = new FFmpegAdapter($path);  
        $data['path'] = $path;
        $data['length'] = $ffprobe->getDuration();
        $data['thumbnail'] = $ffprobe->getFrame();
        return $data;
    }
}