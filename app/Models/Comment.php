<?php

namespace App\Models;

use App\Models\Traits\Likeable;
use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory,Likeable;
     
    protected $fillable =['user_id','video_id','body'];
    public function video(){
         return $this->belongsTo(Video::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
   }
   public function getCreatedAtInHumenAttribute()
   {
       return  (new Verta($this->created_at))->formatDifference();
   }
  
}
