<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Http\Requests\StoreVideosRequest;

class UpdateVideosRequest extends StoreVideosRequest
{
    
    public function rules()
    {
        return array_merge(parent::rules(),[
            "slug"=> ['required', Rule::unique('videos')->ignore($this->videos),'alpha-dash'],
        ]);
    }
}
