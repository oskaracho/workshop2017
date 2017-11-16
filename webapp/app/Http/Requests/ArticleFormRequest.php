<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
            'code'=> 'required|numeric|min:4',
            'name'=> 'required|min:4|unique:articles,name',
            'stock'=> 'required|numeric|min:0',
            'state'=> 'required|max:1',
            'sale_price'=> 'required|numeric|min:0',
            //
        ];
    }
    public function messages()
    {
        return[
            'code.min' =>'El valor del Codigo debe tener 4 numeros',
            'code.numeric' =>'El valor del Codigo debe ser un numero',
            'name.min' =>'El Nombre del Producto no debe ser corto',
            'name.unique'=>'El Nombre del Producto ya existe',
            'stock.min'=> 'Los valores del Stock no pueden ser negativos',
            'stock.numeric' =>'El valor del Stock debe ser un numero',
            'state.max'=> 'El valor del Estado deber ser una Letra',
            'sale_price.min'=> 'El valor del Precio no debe ser negativo',
            'sale_price.numeric' =>'El valor Precio debe de un numero',
        ];
    }
}
