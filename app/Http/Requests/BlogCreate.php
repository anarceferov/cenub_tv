<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogCreate extends FormRequest
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
            'content' => 'required|min:5',
            'title' => 'required|min:5',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',

        ];
    }
    public function attributes(){
        return [
            'title'=> 'Başlıq:',
            'image' => 'Blog Şəkli:',
            'content' => 'Mövzu:',
        ];
    }
}
