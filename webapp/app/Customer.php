<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';

    protected $primaryKey ='id';

    public $timestamps = true;

    protected $fillable = [

        'name',
        'document_type',
        'document_num',
        'address',
        'phone',
        'emaill'

    ];

    public function scopeDocument($query,$document_num){

        //
        $query -> where ('document_num',$document_num);
    }
}
