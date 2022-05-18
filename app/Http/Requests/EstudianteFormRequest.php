<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstudianteFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'id_persona' => ['required', 'string', 'max:50'],
            'id_acudiente' => ['required', 'string', 'max:50'],
            'id_rol' => ['required', 'string', 'max:50'],
            'genero'  => ['required', 'string', 'max:50'], 
            'fecha_nacimiento' => ['required', 'string', 'max:50'],
            'edad'  => ['required', 'string', 'max:50'], 
            'nombre_padre'  => ['required', 'string', 'max:50'], 
            'nombre_madre' => ['required', 'string', 'max:50'],
            'estado'  => ['required', 'string', 'max:50'], 
        ];
    }
}
