<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $table = 'sales';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'customer_id',
        'voucher_type',
        'voucher_series',
        'voucher_num',
        'date',
        'tax',
        'sale_total',
        'state'
    ];
}

