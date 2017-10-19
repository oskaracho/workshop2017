<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'id_cliente',
        'tipo_comprobante',
        'serie_comprobante',
        'num_comprobante',
        'impuesto',
        'total_venta',
        'estado'
    ];

}

