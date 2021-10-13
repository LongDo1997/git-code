<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users',
            'myPassword' => 'required|min:5',
            'cPassword' => 'required|same:myPassword',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên không được để trống!',
            'name.min' => 'Tên tối thiểu 5 ký tự!',
            'name.max' => 'Tên tối đa 50 ký tự!',
            'email.required' => 'Email không được để trống!',
            'email.email' => 'Email không đúng định dạng "abc@gmail.com"!',
            'email.unique' => 'Email đã được sử dụng!',
            'myPassword.required' => 'Mật khẩu không được để trống!',
            'myPassword.min' => 'Mật khẩu tối thiểu 5 ký tự!',
            'cPassword.required' => 'Mật khẩu không được để trống!',
            'cPassword.same' => 'Mật khẩu không trùng khớp!',
            'password.required' => 'Mật khẩu không được để trống!',
        ];
    }
}
