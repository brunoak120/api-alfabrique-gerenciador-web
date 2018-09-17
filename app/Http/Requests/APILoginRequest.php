<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class APILoginRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Por favor, preencha o campo Email.',
            'email.email' => 'Por favor, informe um Email válido.',
            'password.required' => 'Por favor, informe sua senha.',
            'password.min' => 'Por favor, a senha deve conter no mínimo 6 caracteres.',
        ];
    }
}