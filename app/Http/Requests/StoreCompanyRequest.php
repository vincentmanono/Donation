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
            'company' => ['required','string','unique:companies,name'],
            'document'=> ['required','file'],
            'address'=> ['required','string'],
            'email'=> ['required','email'],
            'url'=> ['required','url'],
            'location'=> ['required','string'],
            'services'=> ['required','string'],

        ];
    }


}
