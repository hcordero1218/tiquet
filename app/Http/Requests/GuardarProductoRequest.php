<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarProductoRequest extends FormRequest
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
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
            'categoria_producto_idcategoria_producto' => 'required',
            'estado_producto_idestado_producto' => 'required',
            'torneo_idtorneo' => 'required',
        ];
    }
}
