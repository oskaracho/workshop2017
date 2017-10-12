<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{

   protected $table = 'providers';

     protected $primaryKey ='id';

     public $timestamps = true;

     protected $fillable = [

         'name',
         'telefono',
         'direccion',
         'description'
     ];


}

