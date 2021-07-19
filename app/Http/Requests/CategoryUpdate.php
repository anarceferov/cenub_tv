<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdate extends FormRequest
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
            'name' => 'min:2',
            'color' => 'min:2',
            'image' => 'nullable|max:2048|mimes:jpg,jpeg,png',
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
