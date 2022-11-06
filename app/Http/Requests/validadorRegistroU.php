<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistroU extends FormRequest
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
            'txtEmpleado' => 'min:5',
            'txtTelefono' => 'min:10',
            'txtCorreo' => 'min:4',
            'txtCargo' => 'min:4',
            'txtFechaNa' => 'min:4',
            'txtContra' => 'min:4',
        ];
    }
}
