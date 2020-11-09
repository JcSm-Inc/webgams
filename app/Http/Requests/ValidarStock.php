<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarStock extends FormRequest
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
            //
            'CANTIDAD'=>'required|numeric',
            'NRO_DOCUMENTO'=>'required',
            'PU'=>'required|numeric',
            'PROVEEDOR'=>'required' 

        ];
    }
}
