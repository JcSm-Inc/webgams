<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarArchivoAdjunto extends FormRequest
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
        
            'NOMBRE' => 'required|min:3|max:45',
            'DIRECCION' => 'required|max:100',
            'EXTENCION' => 'max:10'

        ];
    }
}
