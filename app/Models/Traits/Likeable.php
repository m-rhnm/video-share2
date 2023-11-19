<?php
namespace App\Models\Traits;

use App\Models\Like;
use App\Models\User;

trait Likeable 
{
    public function likes(){
        return $this->morphMany(Like::class,'likeable');
      }
      public function getLikesCountAttribute(){
        return $this->likes()
        ->where('vote',1)
        ->count();
      }
      public function getDislikesCountAttribute(){
        return $this->likes()
        ->where('vote',-1)
        ->count();
      }

      public function likeBy(User $user)
      {
        if($this->islikeBy($user)) return;
        return $this->likes()->create([
          'user_id'=>$user->id,
          'vote'=>1
        ]);
      }
      public function dislikeBy(User $user)
      {
        if($this->isDislikeBy($user)) return;
        return $this->likes()->create([
          'user_id'=>$user->id,
          'vote'=>-1
        ]);
      }
      public function islikeBy(User $user)
      {
        return $this->likes()
        ->where('vote',1)
        ->where('user_id',$user->id)
        ->exists();
      }

      public function isDislikeBy(User $user)
      {
        return $this->likes()
        ->where('vote',-1)
        ->where('user_id',$user->id)
        ->exists();
      }

}

