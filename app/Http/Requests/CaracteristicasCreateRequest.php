<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CaracteristicasCreateRequest extends FormRequest
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
            'nome' => 'required|min:1|unique:caracteristicas',
            'descricao' => 'required|min:5|max:500'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Por favor, preencha o campo Nome da caracteristica.',
            'nome.min' => 'Por favor, informe um Nome da caracteristica de no mínimo :min caracteres.',
            'nome.unique' => 'Nome ":input" como caracteristica já está sendo utilizado.',
            'descricao.required' => 'Por favor, preencha o campo de Descrição.',
            'descricao.min' => 'Por favor, informe uma Descrição de no mínimo :min caracteres.',
            'descricao.max' => 'Por favor, informe uma Descrição de no mínimo :max caracteres.',
        ];
    }
}