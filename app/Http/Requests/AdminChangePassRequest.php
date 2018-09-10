<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminChangePassRequest extends FormRequest
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
            'old_pass' => 'required',
            'new_pass' => 'required|confirmed|min:6'
        ];
    }

    public function messages()
    {
        return [
            'old_pass.required' => 'Por favor, preencha o campo Senha antiga.',
            'new_pass.required' => 'Por favor, preencha o campo Nova Senha.',
            'new_pass.min' => 'Nova senha deve ter no mínimo :min caracteres.',
            'new_pass.confirmed' => 'Nova senha e a confirmação não conferem.',
        ];
    }
}