<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'gender' => 'required',
            'age' => 'required',
            'nickname' => 'required|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            'gender.required' => '性別は必須です。',
            'age.required' => '年代は必須です。',
            'nickname.required' => 'ニックネームは必須です。',
            'nickname.string' => 'ニックネームは文字列である必要があります。',
            'nickname.max' => 'ニックネームは50文字以内で入力してください。',
        ];
    }
}
