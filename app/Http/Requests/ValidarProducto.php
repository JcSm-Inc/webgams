<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarProducto extends FormRequest
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
            'CODPROD'    => 'required|unique:productos|min:3|max:6',
            'NOMBRE'    => 'required|max:100',
            'DESCRIPCION'=>'nullable|max:200',
            'TIPO'      => 'max:45',
            'FOTO'      => 'max:100',
            'STOCK'     => 'numeric'
        ];
    }
}
