<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrisionerRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'prisioner_number' => 'required|numeric|unique:prisioners,prisioner_number',
            'birth_address' => 'required|string|max:255',
            'birth_days' => 'required',
            'age' => 'required|integer|max:255',
            'gender' => 'required|string|max:255',
            'nasionality' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'religion' => 'required|string|max:255',
            'job' => 'required|string|max:255',
        ];
    }
}
