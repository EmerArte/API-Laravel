<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUsuarioRequest extends FormRequest
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
            'nombre'=> "required",
            'apellido'=> "required",
            'direccion'=> "required",
            'correo'=>"required",
            'password'=>"required",
            'telefono'=> "required",
            'facebook'=> "required",
            'membersia_id'=> "required",
            'edad'=> "required",
            'peso'=> "required",
            'estatura'=> "required"
        ];
    }
}