<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class APIRegisterRequest extends FormRequest
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
            'nome' => 'required',
            'email' => 'required|email|unique:usuarios',
            'senha' => 'required|min:6',
            'confirmarSenha' => 'required|min:6|same:senha'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Por favor, preencha o campo Email.',
            'email.email' => 'Por favor, informe um Email válido.',
            'senha.required' => 'Por favor, informe sua senha.',
            'email.unique' => 'Este e-mail já está em uso.',
            'senha.min' => 'Sua senha deve conter no mínimo 6 caracteres.',
            'confirmarSenha.same' => 'Senhas não conferem.',
            'confirmarSenha.required' => 'Por favor, confirme sua senha.',
            'confirmarSenha.min' => 'Confirme a senha com no mínimo 6 caracteres.',
        ];
    }
}