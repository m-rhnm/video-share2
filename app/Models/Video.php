<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    public function getRouteKeyName(){
        return "slug";
    }
    protected $fillable = [
        'name','slug','category','length','description','url','thumbnail'
    ];
    public function getLengthInHumanAttribute()
    {
        return gmdate("i:s", $this->value);
    }
    public function getCreatedAtAttribute($value)
    {
        return  (new Verta($value))->formatDifference();
    }
    public function relatedVideos(int $count = 9)
    {
        return Video::all()->random($count);
    }

}
