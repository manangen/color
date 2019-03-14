<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinksStoreRequest extends FormRequest
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
              //链接验证
                'lname' => 'required',
                'lurl' => 'required|regex:/^(?=^.{3,255}$)(http(s)?:\/\/)?(www\.)?[a-zA-Z0-9][-a-zA-Z0-9]{0,62}(\.[a-zA-Z0-9][-a-zA-Z0-9]{0,62})+(:\d+)*(\/\w+\.\w+)*$/',
                'description' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'lname.required' => '链接名不能为空',
            'lurl.required' => '链接地址不能为空',
            'lurl.regex' => '链接格式不正确',
            'description.required' => '链接说明不能为空',

        ];
    }
}
