<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistro extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtNombre' => 'min:5',
            'txtCorreo' => 'min:4',
            'txtNomUsua' => 'min:4',
            'txtContraseña' => 'min:4',
        ];
    }
}
