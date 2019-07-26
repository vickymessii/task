<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
            'first_name' => 'required',
            'last_name'=>'required',
            'email' => 'required|unique:employees|max:255',
            'phone' => 'required',
            'company_id' => 'required',
        ];
    }
    public function messages()
    {
        $messages = [
            'company_id.required' => 'The select company field is required.',
        ];
        return $messages;
    }
}
