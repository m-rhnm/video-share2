<?php

namespace App\Models;

use App\Models\Category;
use Hekmatinasser\Verta\Verta;
use App\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory,Likeable;
    public function getRouteKeyName(){
        return "slug";
    }
    protected $fillable = [
        'name','slug','category_id','length','description','url','thumbnail'
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
        
        return$this->Category->getRandomVideos($count);
    }
    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }
    public function user()
    {
       return $this->belongsTo(User::class);
    }
    public function comments()
    {
       return $this->hasMany(Comment::class)->orderBy('created_at','desc');
    }
    public function getOwnerNameAttribute(){

        return $this->user?->name;
    }
    public function getOwnerAvatarAttribute(){
        return $this->user?->gravatar;
    }
   

}
