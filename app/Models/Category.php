<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function videos()
    {
       return $this->hasMany(Video::class);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function getRandomVideos(int $count = 9)
    {
        
        return $this->videos()->inRandomOrder()->get()->take($count)->load('user');
    }
}
