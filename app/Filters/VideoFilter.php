<?php
namespace App\Filters;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class VideoFilter 
{
    public function __construct(public Builder $query)
    {

    }
    public function apply(array $params)
    {
        foreach ($params as $methodName => $value)
        {
            if(is_null($value)) continue;
            $this->$methodName($value);
        }
    }
    private function sortBy($value)
    {
        if($value == 'like'){
            $this->query->leftJoin('likes',function($join)
            {
                $join->on('likes.likeable_id','=','videos.id')
                ->where('likes.likeable_type','=','App\Models\Video')
                ->where('likes.vote','=', 1);
            })->groupBy('videos.id')->select(['videos.*',DB::raw('count(likes.id) as count')])->orderBy('count','desc');
        }
        if($value == 'length')
        {
            $this->query->orderBy('length', 'desc');
        }
        if($value == 'created_at')
        {
            $this->query->orderBy('created_at', 'desc');
        }
        
    }
    private function length($value)
    {
        if($value == 1){
            $this->query->where('length', '<' ,60);
         }
         if($value == 2)
         {
             $this->query->whereBetween('length', [60,300]);
         }
         if($value == 3)
         {
            $this->query->where('length', '>' ,300);
         }
    }
    private function q($value)
    {
        
            $this->query->where('name', 'like' ,"%{$value}%");
         
    }
}