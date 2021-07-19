<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreate extends FormRequest
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
            'name' => 'required|min:2',
            'color' => 'required|min:2',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png',
        ];
    }
    public function attributes(){
        return [
            'name'=> 'Kateqori Adı:',
            'image' => 'Kateqori Şəkli:',
            'color' => 'Rəng:',
        ];
    }
}
