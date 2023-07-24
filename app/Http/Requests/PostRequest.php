<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post.title'=>'required|string|max:100',
            'post.body'=>'required|string|max:4000',
        ];
    }
    /**
     * バリデーションエラーのカスタム属性の取得
     *
     * @return array
     
    public function attributes()
    {
        return [
            'post.title' => 'タイトル',
            'post.body'=>'内容',
        ];
    }
    
    public function messages(){
        return [
            'posts.title.required'=>'タイトルが入力されていないか、正しく入力されていません',
            'posts.body.required'=>'本文が入力されていないか、正しく入力されていません',
            ];
    }
    */
}