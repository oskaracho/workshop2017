<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warehouses;

class WarehouseListController extends Controller
{

    public function index()
    {
        $warehouse = Warehouses::latest()->paginate(10);
        return view('warehouse.listWh',compact('warehouse'))
            ->with('i',(request()->input('page',1)-1)*5);
    }



}
