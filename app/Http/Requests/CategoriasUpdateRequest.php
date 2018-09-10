<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoriasUpdateRequest extends FormRequest
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
            'nome' => 'required|min:5|' . Rule::unique('categorias')->ignore($this->id)
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Por favor, preencha o campo Nome da categoria.',
            'nome.min' => 'Por favor, informe um Nome da categoria de no mínimo :min caracteres.',
            'nome.unique' => 'Nome ":input" como categoria já existente.'
        ];
    }
}