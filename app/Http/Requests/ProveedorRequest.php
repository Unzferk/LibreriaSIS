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
            'nombre' => 'required|max:35',
            'telefono' => 'required|max:8|min:7',
            'correo' => 'required|max:30',
            'pagina_web' => 'max:50|required',
            'fax' => 'max:30|required', 
            'codigo' => 'required|max:8|min:4|unique:proveedor',
            'direccion' => 'required|max:50',
        ];
    }
}
