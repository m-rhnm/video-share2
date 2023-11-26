<?php
namespace App\services;

use FFMpeg\Coordinate\TimeCode;
use FFMpeg\FFMpeg;
use FFMpeg\FFProbe;
use Illuminate\Support\Facades\Storage;

class FFmpegAdapter
{
    private $ffprobe;
    private $ffmpeg;
    private $video;
    private $video_probe;
   public function __construct(public String $path)
   {
    $this->ffmpeg = FFMpeg::create([
        'ffmpeg.binaries'  => 'C:/ffmpeg/bin/ffmpeg.exe',
        'ffprobe.binaries' => 'C:/ffmpeg/bin/ffprobe.exe'
    ]);
    $this->ffprobe = FFProbe::create([
        'ffmpeg.binaries'  => 'C:/ffmpeg/bin/ffmpeg.exe',
        'ffprobe.binaries' => 'C:/ffmpeg/bin/ffprobe.exe'
    ]);
    $this->video_probe = $this->ffprobe->format(Storage::path($path));
    $this->video = $this->ffmpeg->open(Storage::path($path));
   }
   public function getDuration(){
    return (int)$this->video_probe->get('duration');
   }
   public function getFrame(){
    $frame = $this->video->frame(TimeCode::fromSeconds(2));
    $fileName = pathinfo($this->path,PATHINFO_FILENAME) . '.jpg';
    $storagePath = storage_path('app/public/' . $fileName);
    $frame->save($storagePath);
    return $fileName;
   }
}