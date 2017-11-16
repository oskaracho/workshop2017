<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WarehouseFormRequest extends FormRequest
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
            'name' => 'required|max:30',
            'volumen' => 'required',
            'branches' => 'required',
            'city' => 'required',
            'address' => 'required',
            //'user' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Nombre Requerido.',
            'volumen.required' => 'Volumen Requerido.',
            'branches.required' => 'Sucursal Requerido.',
            'city.required' => 'Ciudad Requerido.',
            'address.required' => 'Direccion Requerido.',
            //'user.required' => 'CI Requerido.',
        ];
    }

    public function methodName(RequestName $request)
    {
        //Your code
    }

}
