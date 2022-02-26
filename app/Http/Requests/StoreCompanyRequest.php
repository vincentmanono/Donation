<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  Auth::check() ;
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
            'certificate'=> ['required','string'],
            'address'=> ['required','string'],
            'email'=> ['required','email'],
            'url'=> ['required','string','url','active_url'],
            'location'=> ['required','string'],
            'services'=> ['required','string'],

        ];
    }
}
