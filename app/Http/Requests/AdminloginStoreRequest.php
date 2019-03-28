<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminloginStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uname' => 'required|regex:/^[a-zA-Z]{1}[\w]{7,15}$/',
            'upass' => 'required|regex:/^[\w]{6,}$/',
            
        ];
    }

    // 自定义 错误消息
    public function messages()
    {
        return [
            'uname.regex'=>'用户名格式不正确',
            'uname.required'=>'用户名不能为空',
            'upass.required'=>'密码不能为空',
            'upass.regex'=>'密码不能少于6位',           
        ];
    }
}
