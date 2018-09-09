<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasCreateRequest extends FormRequest
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
            'categoria' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'categoria.required' => 'Por favor, preencha o campo CATEGORIA.',
            'categoria.min' => 'Por favor, informe um CATEGORIA de no mínimo :min caracteres.',
        ];
    }
}