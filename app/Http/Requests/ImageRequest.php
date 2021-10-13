<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'caption'=>'required',
            'my_file'=>'required', 
        ];
    }
    public function messages()
    {
        return [
            'caption.required'=>'Tiêu đề ảnh không được để trống',
            'my_file.required'=>'Ảnh không được để trống',
           

            
            // 'my_file.required'=>'Image is not empty'
        ];
    }
}
