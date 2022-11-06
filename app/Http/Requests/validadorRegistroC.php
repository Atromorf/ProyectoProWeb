<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorRegistroC extends FormRequest
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
            'txtComic' => 'min:5',
            'txtCantidad' => 'min:5',
            'txtVendidos' => 'min:4',
            'txtImagen' => 'min:4',
            'txtPrecio' => 'min:4',
        ];
    }
}
