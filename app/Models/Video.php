<?php

namespace App\Models;

use Hekmatinasser\Verta\Verta;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;
    public function getLengthAttribute($value)
    {
        return gmdate("i:s", $value);
    }
    public function getCreatedAtAttribute($value)
    {
        return  (new Verta($value))->formatDifference();
    }

}
