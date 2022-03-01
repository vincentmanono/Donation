<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'name' => ['required','string'],
            'quantity' => ['required','string'],
            'weight' => ['required','string'],
            'type' => ['required','string'],
            'durability' => ['required','string'],
            'expiry_date' => ['required','string'],
            'image' => ['nullable','image'],
            'location' => ['required','string'],
            'description' => ['required','string'],
            'transport' => ['required','string'],
        ];
    }
}
