<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaleDetail extends Model
{
    //
    protected $table = 'saledetail';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'sale_id',
        'article_id',
        'quantity',
        'sale_price',
        'discount'
    ];

}
