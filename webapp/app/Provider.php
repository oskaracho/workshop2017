<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Provider extends Model
{
    use SoftDeletes;

   protected $table = 'providers';

     protected $primaryKey ='id';

    protected $dates =['delete_at'];

     public $timestamps = true;

     protected $fillable = [

         'name',
         'telefono',
         'direccion',
         'description'
     ];


}

