<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerUpdate extends FormRequest
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
            'link' => 'url|required',
            'position' => 'unique:cb_banners,position|required',
            'image' => 'max:2048|mimes:jpg,jpeg,png',
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
