<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'content' => 'min:5',
            'title' => 'min:5',
            'image' => 'max:2048|mimes:jpg,jpeg,png',
        ];
    }
    public function attributes(){
        return [
            'title'=> 'Xəbər Başlığı:',
            'image' => 'Xəbər Şəkli:',
            'content' => 'Xəbər Məzmunu:',
        ];
    }
}
