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
        return $this->belongsTo(City::class);
    }

    public static function everything(){
        $warehouse=Warehouses::all();
        $datos=array();
        $c=0;
        foreach ($warehouse as $sem) {
            $par=User::find($sem->user);
            $ci=City::find($sem->city);
                $datos[$c]=array(
                    'id'=>$sem->id,
                    'name'=>$sem->name,
                    'volumen'=>$sem->volumen,
                    'branches'=>$sem->branches,
                    'city'=>$ci->name,
                    'address'=>$sem->address,
                    'user'=>$par->name
                );
                $c++;
            }
            return $datos;
    }

}
