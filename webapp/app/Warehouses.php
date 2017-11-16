<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouses extends Model
{

    protected $fillable = [
        'name', 'volumen','branches','city','address','user'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function cities(){
        return $this->hasMany(City::class);
    }

}
