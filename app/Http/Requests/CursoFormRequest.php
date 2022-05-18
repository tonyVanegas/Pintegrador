<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CursoFormRequest extends FormRequest
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
            'grado' => ['required', 'string', 'max:50'],
            'anio_lectivo' => ['required', 'string', 'max:50'],
            'consecutivo' => ['required', 'string', 'max:50'],
            'estado'  => ['required', 'string', 'max:50'], 
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
