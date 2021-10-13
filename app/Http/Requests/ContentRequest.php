<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContentRequest extends FormRequest
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
            'tittle'=>'required|unique:contents,tittle,'.request()->id,
            'slug'=>'required|unique:contents,slug,'.request()->id,
            'description'=>'required',
            'summary'=>'required',
            'meta_keyword'=>'required',
            'meta_description'=>'required',
            'my_file'=>'required', 
            'index'=>'gte:1'
        ];
    }
    public function messages()
    {
        return [
            'tittle.required'=>'Tiêu đề bài viết không được để trống',
            'tittle.unique'=>'Tiêu đề đã tồn tại',
            'slug.required'=>'slug không được để trống',
            'slug.unique'=>'slug đã tồn tại',
            'description.required'=>'Mô tả không được để trống',
            'summary.required'=>'Mô tả chung không được để trống',
            'meta_keyword.required'=>'Từ khóa không được để trống',
            'meta_description.required'=>'Từ khóa mô tả không được để trống',
            'my_file.required'=>'Ảnh không được để trống',
            'index.gte'=>'Mức ưu tiên phải lớn hơn 1',

            
            // 'my_file.required'=>'Image is not empty'
        ];
    }
}
