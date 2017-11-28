<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleFormRequest extends FormRequest
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
            'id'=> 'required',
            'voucher_num'=>'required|min:7',
        ];

    }
    public function messages()
    {
        return[
            'id.required'=>'Se requiere un registrar al Cliente' ,
            'voucher_num.min'=>'Numero de Comprobante Erroneo ' ,
        ];
    }

}
