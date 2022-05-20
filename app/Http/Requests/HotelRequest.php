<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'category' => ['required'],
            'name' => ['required'],
            'address' => ['required'],
            'email' => ['required'],
            'tel' => ['required'],
            'image' => ['file', 'mimes:jpeg, jpg, png', 'dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000'],            
        ];
    }
}
