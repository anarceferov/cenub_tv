<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogUpdate extends FormRequest
{

    public function authorize()
    {
        return true;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'content' => 'required|min:5',
            'title' => 'required|min:5',
            'image' => 'nullable|max:2048|mimes:jpg,jpeg,png',

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
