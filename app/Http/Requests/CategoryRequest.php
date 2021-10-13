<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|unique:categories,name,'.request()->id,
            'key_name'=>'required|unique:categories,key_name,'.request()->id,
            'slug'=>'required|unique:categories,slug,'.request()->id,
            'meta_description'=>'required',
            'meta_keyword'=>'required',
            'my_file'=>'required', 
            'index'=>'gte:1'
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên danh mục không được để trống',
            'name.unique'=>'Tên danh mục đã tồn tại',
            'key_name.required'=>'mã tên danh mục không được để trống',
            'key_name.unique'=>'mã tên danh mục đã tồn tại',
            'slug.required'=>'slug không được để trống',
            'slug.unique'=>'slug đã tồn tại',
            'meta_description.required'=>'Mô tả không được để trống',
            'meta_keyword.required'=>'Từ khóa không được để trống',
            'my_file.required'=>'Ảnh không được để trống',
            'index.gte'=>'Mức ưu tiên phải lớn hơn 1',

            
            // 'my_file.required'=>'Image is not empty'
        ];
    }
}
