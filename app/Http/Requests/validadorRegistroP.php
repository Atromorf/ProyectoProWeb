<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistroP extends FormRequest
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
            'txtEmpresa' => 'min:5',
            'txtDireccion' => 'min:5',
            'txtContacto' => 'min:5',
            'txtFijo' => 'min:4',
            'txtCelular' => 'min:4',
            'txtCorreo' => 'min:4',
        ];
    }
}
