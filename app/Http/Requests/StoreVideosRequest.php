<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StoreVideosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'slug'=>'required|unique:videos,slug|alpha-dash',
            'file'=>'required|file|mimetypes:video/mp4',
            'category_id'=> 'required|exists:categories,id',
        ];
    }
    protected function prepareForValidation()
{
    $this->merge([
        'slug' => Str::slug($this->slug),
    ]);
}
public function messages(){
    return[
        'file.*' =>'فایل باید ویدویی باشد',
        'thumbnail.*' =>'فایل باید تصویر باشد',
        'slug*'=>"برچسب باید منحصر به فرد باشد",
        'name.*'=>"نام باید حداقل 3 کاکتر باشد ",
    ];
}
}
