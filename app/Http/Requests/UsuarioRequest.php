<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'user' => array(
                'required',
            ),

            'nombre' => array(
                'required',
            ),

            'apellido' => array(
                'required'
            ),

            'correo' => array(
                'required',
            ),

            'codigo_area' => array(
                'required', 'integer',
            ),

            'telefono' => array(
                'required',
            ),

            'password' => array(
                'required',
            ),

            'fecha_nacimiento' => array(
                'required', 'date'
            ),

            'rol_id' => array(
                'required', 'integer',
            ),
        ];
    }
}
