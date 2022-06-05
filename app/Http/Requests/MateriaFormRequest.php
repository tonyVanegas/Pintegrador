<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MateriaFormRequest extends FormRequest
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
            'id' => ['required','numeric','max:50'],
            'nombre' => ['required','string','unique:materias,nombre','max:50'],
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