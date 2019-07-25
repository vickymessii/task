<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompany extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:companies|max:255',
            'logo' => 'mimes:jpeg,jpg,png,gif|required|max:10000|dimensions:min_width=100,min_height=100',
            // 'website' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
            'website' => 'required',
            
        ];
    }
}
