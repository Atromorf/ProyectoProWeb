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
            'txtEmpresa' => 'min:3',
            'txtDireccion' => 'min:3',
            'txtPais' => 'min:3',
            'txtNumFijo' => 'min:9',
            'txtNumCelular' => 'min:9',
            'txtCorreo' => 'min:3',
        ];
    }
}
