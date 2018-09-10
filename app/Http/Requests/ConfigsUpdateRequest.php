<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigsUpdateRequest extends FormRequest
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
            'peso' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'peso.required' => 'Por favor, preencha o campo Peso.',
            'peso.numeric' => 'Por favor, preencha o campo Peso apenas com números.'
        ];
    }
}