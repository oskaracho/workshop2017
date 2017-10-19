<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    //
    protected $table = 'SaleDetails';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'id_venta',
        'id_producto',
        'cantidad',
        'precio_venta',
        'descuento'
    ];

}
