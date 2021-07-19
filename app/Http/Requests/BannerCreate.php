<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerCreate extends FormRequest
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

    public function rules()
    {
        return [
            'link' => 'required|url',
            'position' => 'required|unique:cb_banners,position',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
        ];
    }
    public function attributes(){
        return [
            'link'=> 'Link:',
            'position' => 'Mövqe:',
            'image' => 'Şəkil:',
        ];
    }
}
