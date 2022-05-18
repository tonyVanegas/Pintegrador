<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'tipo_documento' => ['required', 'string', 'max:50'],
            'numero_documento' => ['required', 'string', 'unique:personas,numero_documento', 'max:50'],
            'nombres' => ['required', 'string', 'unique:personas,nombres','max:50'],
            'primer_apellido'  => ['required', 'string', 'max:50'],
            'segundo_apellido'  => ['required', 'string', 'max:50'],
        ];
    }
 
    public function withValidator($validator)
    {
    
        $validator->after(function($validator) {
         if($validator->errors()->count()) {
             if(!in_array($this->method(), ['PUT', 'PATCH'])) {
                 $validator->errors()->add('post', true);
              } 
           }   
        });
    }
    


}