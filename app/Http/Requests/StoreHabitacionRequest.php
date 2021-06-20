<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHabitacionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    //Método  para logica de autorización
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    //Devuelve un array en reglas
    public function rules()
    {
        return [
            'tipo'=>'required|max:50',
            'nivel'=>'required|min:1',
            'cuarto'=>'required|image',
            'slug'=>'required',
        ];
    }
}
