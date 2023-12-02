<?php

namespace App\Models;

use App\Models\Video;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  HasFactory, Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $visible = [
        'name',
        'id',
        'email',
    ];
    protected $hidden = [
        'password',
        'remember_token',
        
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getGravatarAttribute()
    {
        $hash = md5($this->attributes['email']);
        return "http://s.gravatar.com/avatar/$hash";
    }
    public function videos()
    {
       return $this->hasMany(Video::class);
    }
    public function comments()
    {
       return $this->hasMany(Comment::class);
    }
}
