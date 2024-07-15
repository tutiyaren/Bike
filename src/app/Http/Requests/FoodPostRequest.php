<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoodPostRequest extends FormRequest
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
            'area' => 'required',
            'food_genre' => 'required',
            'title' => 'required|string|max:50',
            'content' => 'required|string|max:255',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'image|mimes:jpeg,png,jpg|max:2048',
            'image4' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'area.required' => 'エリアを選択してください。',
            'food_genre.required' => 'ジャンルを選択してください。',
            'title.required' => 'タイトルを入力してください。',
            'title.string' => 'タイトルは文字列で入力してください。',
            'title.max' => 'タイトルは50文字以内で入力してください。',
            'content.required' => '詳細を入力してください。',
            'content.string' => '詳細は文字列で入力してください。',
            'content.max' => '詳細は255文字以内で入力してください。',
            'image1.required' => '一枚目の画像をアップロードしてください。',
            'image1.image' => '一枚目の画像は画像ファイルである必要があります。',
            'image1.mimes' => '一枚目の画像はjpeg, png, jpg形式でアップロードしてください。',
            'image1.max' => '一枚目の画像のサイズは2MB以内である必要があります。',
            'image2.image' => '二枚目の画像は画像ファイルである必要があります。',
            'image2.mimes' => '二枚目の画像はjpeg, png, jpg形式でアップロードしてください。',
            'image2.max' => '二枚目の画像のサイズは2MB以内である必要があります。',
            'image3.image' => '三枚目の画像は画像ファイルである必要があります。',
            'image3.mimes' => '三枚目の画像はjpeg, png, jpg形式でアップロードしてください。',
            'image3.max' => '三枚目の画像のサイズは2MB以内である必要があります。',
            'image4.image' => '四枚目の画像は画像ファイルである必要があります。',
            'image4.mimes' => '四枚目の画像はjpeg, png, jpg形式でアップロードしてください。',
            'image4.max' => '四枚目の画像のサイズは2MB以内である必要があります。',
        ];
    }
}
