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

            'name'=> 'required',
            'phone' => 'required|min:7',
            'document_num'=> 'required|min:5',
            'address'=> 'required',

        ];

    }
    public function messages()
    {
        return[
            'name.required'=>'Se requiere un Nombre' ,
            'document_num.min' =>'Numero de Docuemnto  Erroneo',
            'document_num.required' =>'Se requiere un Numero de Documento',
            'address.required' =>'Se requiere una Direccion',
            'phone.required'=>'Se requiere un Telefono' ,
            'phone.min' =>'Numero de telefono erroneo ',
        ];
    }

}
