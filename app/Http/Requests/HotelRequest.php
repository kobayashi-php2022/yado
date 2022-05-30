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
    //バリデーション
    public function rules()
    {
        return [
            'category' => 'required',
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'email' => 'required|max:255',
            'tel' => 'required|max:255',
            'image' => 'file|mimes:jpeg,jpg,png|max:1600',            
        ];
    }
}
