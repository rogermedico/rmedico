<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
        $validationRules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required',
        ];

        if(env('APP_ENV') === 'production')
        {
            $validationRules['g-recaptcha-response'] = 'required|captcha';
        }

        return $validationRules;
    }

    public function messages()
    {
        return [
            'required' => __('The :attribute field is required.'),
            'email' => __('The :attribute must be a valid email address'),
        ];
    }
}
