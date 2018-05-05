<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|max:35',
            'telefono' => 'required|numeric|max:8|min:7',
            'correo' => 'required|max:30',
            'pag_web' => 'max:50',
            'fax' => 'max:30',
            'direccion' => 'required|max:50',
        ];
    }
}
