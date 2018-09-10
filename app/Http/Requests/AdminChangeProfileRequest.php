<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminChangeProfileRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'email' => 'required|email|' . Rule::unique('usuarios')->ignore($this->id),
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Por favor, preencha seu nome.',
            'nome.min' => 'Por favor, informe um Nome de no mínimo :min caracteres.',
            'email.required' => 'Por favor, preencha o campo e-mail.',
            'email.email' => 'Por favor, preencha um e-mail com formato válido.',
            'email.unique' => 'E-mail ":input" já está sendo usado.',
        ];
    }
}