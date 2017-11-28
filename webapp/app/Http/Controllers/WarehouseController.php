<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarehouseFormRequest;
use App\User;
use Illuminate\Http\Request;

use App\Warehouses;
use App\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
//        $warehouse=Warehouses::latest()->paginate(5);
//        $datos=array();
//        $c=0;
//        foreach ($warehouse as $sem) {
//            $par=User::find($sem->user);
//            $ci=City::find($sem->city);
//                $datos=array(
//                    'id'=>$sem->id,
//                    'name'=>$sem->name,
//                    'volumen'=>$sem->volumen,
//                    'branches'=>$sem->branches,
//                    'city'=>$ci->name,
//                    'address'=>$sem->address,
//                    'user'=>$par->name
//                );
//
//            }
        $warehouse = Warehouses::latest()->paginate(5);
        return view('warehouse.index',compact('warehouse'))
            ->with('i',(request()->input('page',1)-1)*5);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WarehouseFormRequest $request)
    {
        //validate fields
        $value = Auth::user()->id;
            $warehouse = new Warehouses;
            $warehouse->name = $request->name;
            $warehouse->volumen = $request->volumen;
            $warehouse->branches = $request->branches;
            $warehouse->city = $request->city;
            $warehouse->address = $request->address;
            $warehouse->user = $value;
            $warehouse->save();

           // Warehouses::create($request->all());
            return redirect()->route('warehouse.index')
                ->with('success','"'.$request->name.'"'.' FUE REGISTRADO CORRECTAMENTE');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warehouse=Warehouses::find($id);
        return view('warehouse.show',compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouse=Warehouses::find($id);
        return view('warehouse.edit',compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WarehouseFormRequest $request, $id)
    {

      Warehouses::find($id)->update($request->all());
      return redirect()->route('warehouse.index')
          ->with('success','"'.$request->name.'"'.' FUE EDITADO CORRECTAMENTE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warehouse=Warehouses::find($id);
        $warehouse->delete();
        return redirect()->route('warehouse.index')->with('success',$warehouse->name.' FUE ELIMINADO');
    }

    public static function warehouseList() {
        $warehouse = Warehouses::all();
        return $warehouse;
    }

}
