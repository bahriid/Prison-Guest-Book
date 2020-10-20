<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'prisioners_id' => 'required|exists:prisioners,id',
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'purposes' => 'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'job' => 'required|string|max:255',
        ];
    }
}
