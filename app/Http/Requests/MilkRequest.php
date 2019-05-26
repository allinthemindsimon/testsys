<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MilkRequest extends FormRequest
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
            'amount_litres'  => 'required|max:150|gte:0',
            'cow_id'  => 'required|exists:cows,id'
        ];
    }

    public function messages()
    {
        return [
            'amount_litres.required' => "This is a required input field"
        ];
    }
}
