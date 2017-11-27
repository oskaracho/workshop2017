<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function warehou(){
        return $this->belongsTo(Warehouses::class);
    }
}
