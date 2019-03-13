<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkStoreRequest extends FormRequest
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
            'lname' => 'required',
            'description'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'uname.required'=>'链接名不能为空',
            'description.required'=>'链接说明不能为空',
        ];
    }
}
