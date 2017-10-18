<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'product_name',
        'product_description',
        'product_price',
        'product_date_up',
        'product_date_down'
    ];
}
