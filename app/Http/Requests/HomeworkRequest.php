<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeworkRequest extends FormRequest
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
            'name' => 'required|min:5',
            'category' => 'required|min:5',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre De La Tarea Es Obligatorio',
            'name.min' => 'El Nombre De La Tarea Debe Tener Minimo 5 Caracteres',
            'category.required' => 'La Categoria De La Tarea Es Obligatoria',
            'category.min' => 'La Categoria De La Tarea Debe Tener Minimo 5 Caracteres',
            'description.required' => 'La Descripción De La Tarea Es Obligatoria',
            'description.min' => 'La Descripción De La Tarea Debe Tener Minimo 10 Caracteres',
        ];
    }
}
