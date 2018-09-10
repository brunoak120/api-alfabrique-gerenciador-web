<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PalavrasCreateRequest extends FormRequest
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
            'nome' => 'required|unique:palavras',
            'categoria_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Por favor, preencha o campo Nome da Palavra.',
            'nome.unique' => 'A palavra ":input" já está sendo usada',
            'categoria_id.required' => 'Por favor, preencha o campo de Categoria'
        ];
    }
}