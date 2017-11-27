<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerFormRequest extends FormRequest
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
            //

            'name'=> 'required|min:4',
            'phone' => 'required|min:7',
            'document_num'=> 'required|min:7',
            'address'=> 'required',

        ];

    }
    public function messages()
    {
        return[
            'name.required'=>'Se requiere un Nombre' ,
            'name.min' =>'Se requiere 4 letras minimo',
            'document_num.num' =>'Se requiere 6 caracteres minimo',
            'document_num.required' =>'Se requiere un Numero de Documento',
            'address.required' =>'Se requiere una Direccion',
            'phone.required'=>'Se requiere un Telefono' ,
            'phone.min' =>'Numero de telefono erroneo ',
        ];
    }

}
