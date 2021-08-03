<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'matter' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El Nombre Es Obligatorio',
            'matter.required' => 'El Asunto Es Obligatorio',
            'email.required' => 'El Correo Es Obligatoria',
            'message.required' => 'El Mensaje Es Obligatoria',
        ];
    }
}
