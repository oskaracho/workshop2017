<?php

namespace App\Http\Controllers;
use App\Sale;
use DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //,["providers" =>$providers ,"searchText"=>$query]

        $sales = DB::table('sales')
              ->where('state','=','A')
              ->count();
        $ingresos =DB::table('sales')
            ->select(DB::raw('SUM(sale_total) as total_sales'))
            ->get();

        $saledetail = DB::table('saledetail')
            ->join('articles','saledetail.article_id','=','articles.id')
            -> select (DB::raw('count(*) as total_ventas, articles.name'))
            ->Groupby ('articles.name')
            ->get();


        return view ('dashboard.index',["sales" => $sales, "ingresos" =>$ingresos,"saledetail" => $saledetail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
