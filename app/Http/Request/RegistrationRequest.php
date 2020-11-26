<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
        return [    'first_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'last_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email_address' => 'required|email',
            'contact_number' => 'required|regex:/^(?=.*[0-9])[- +()0-9]+$/',
            /*
            'national_id' => 'required|alpha_num',
            'passport_number' => 'required|alpha_num',
            */
        ];
    }
}
