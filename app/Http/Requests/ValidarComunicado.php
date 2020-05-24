<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarComunicado extends FormRequest
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
            'FECHA'=> 'required|date',
            'TITULO'=> 'required|min:3|max:45',
            'DESCRIPCION'=> 'required|max:100',
            'idPERSONAL_DE_PLANTA'=> 'required'
        ];
    }
}
