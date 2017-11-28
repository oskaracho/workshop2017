<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use App\Warehouses;
use Illuminate\Support\Facades\DB;


class WarehouseListController extends Controller
{

    public function index()
    {

//        $warehouse=DB::select( DB::raw("SELECT DISTINCT a.*,b.stock FROM warehouses a, articles b WHERE a.id=b.warehouse_id") );
//        table('warehouses')
//            ->join('articles', 'warehouses.id', '=', 'articles.warehouse_id')
//            ->select('articles.stock','warehouses.*')
//            ->distinct()
//                ->get();
        $warehouse = Warehouses::latest()->paginate(5);

        return view('warehouse.listWh',compact('warehouse'))
            ->with('i',(request()->input('page',1)-1)*1);

    }



}
