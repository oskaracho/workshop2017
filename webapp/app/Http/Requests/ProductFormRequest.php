<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'product_name' => 'required|max:50',
            'code' => 'required',

        ];

    }
    public function messages()
    {
        return[
            'product_name.required' => 'Nombre Requerido.',
            'code.required' => 'Codigo Requerido.',

        ];
    }
    public function methodName(RequestName $request)
    {
        //Your code
    }
}
