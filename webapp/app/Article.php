<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    //
    protected $table = 'articles';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'codePro',
        'code',
        'name',
        'warehouse_id',
        'stock',
        'state',
        'sale_price'
    ];

}
