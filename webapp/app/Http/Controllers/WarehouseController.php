<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Warehouses;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $warehouse=Warehouses::orderBy('id','ASC')->paginate(5);
        return view('warehouse.create');
    }

    public function indexDataTable()
    {
        // $catalogList = Warehaouse::all();
        // return response()->json($catalogList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("warehouse.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate fields
        $toValidate = $request->validate([
            'name' => 'required',
            'volumen' => 'required',
            'branches' => 'required',
            'city' => 'required',
            'address' => 'required',
            'ci' => 'required'
        ]);
        //
        if($toValidate) {
            $warehouse = new Warehouses;
            $warehouse->name = $request->name;
            $warehouse->volumen = $request->volumen;
            $warehouse->branches = $request->branches;
            $warehouse->city = $request->city;
            $warehouse->address = $request->address;
            $warehouse->user = $request->ci;
            $warehouse->save();
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
