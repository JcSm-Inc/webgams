<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ValidarUsuario extends FormRequest
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
            'nick' => ['required','unique:users', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'CI'        =>'unique:users|min:6|numeric',
            'NOMBRES'   =>'required|max:50|string',
            'APELLIDOS' =>'required|string|max:50',
            'FECHANACIMIENTO'=>'required|date',
            //'FOTO'      =>'nullable|mimes:jpeg,bmp,png',
            //'GENERO'    =>'boolean|required',
        ];
    }
}
