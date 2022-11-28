<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistroA extends FormRequest
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
            'txtTipo' => 'min:5',
            'txtMarca' => 'min:5',
            'txtDescripcion' => 'min:5',
            'txtCantidad' => 'min:4',
            'txtPrecioCA' => 'min:4',
            'txtPrecioVA' => 'min:4',
        ];
    }
}
