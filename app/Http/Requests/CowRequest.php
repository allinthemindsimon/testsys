<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CowRequest extends FormRequest
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
            'name'  => 'required|max:150|unique:cows'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "The name of the cow is required",
            'name.max' => "I'm sorry but the name canot be longer than 150 characters",
            'name.unique' => "That name is unavailable, please try another"
        ];
    }
}
