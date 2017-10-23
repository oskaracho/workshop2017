<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SaleFormRequest;
use  App\Sale;
use App\SaleDetail;
use DB;
Use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class SaleController extends Controller
{
    //
    public function _construct()
    {

    }

    public function index(Request $request)
    {

        if ($request)
        {
            /*$query=trim($request->get('searchText'));
            $providers = DB::table('providers')->get();*/
            $query=trim($request->searchText);
            $sales = DB::table('sales as s')
                ->join('customer as c','s.customer_id','=','c.id')
                ->join('sale_detail as sd','s.id','=','sd.sale_id')
                ->select('s.id','s.date','c.name','s.voucher_type','s.voucher_series','s.voucher_num','s.tax','s.state','s.sale_total')
                ->where('s.voucher_num','LIKE','%'.$query.'%')
                ->orderBy('s.id','desc')
                ->groupby('s.id','s.date','c.name','s.voucher_type','s.voucher_series','s.voucher_num','s.tax','s.state')
                ->paginate(2);

            return view ('sale.index',["sales" =>$sales ,"searchText"=>$query]);

        }
    }

    public function create(Request $request)
    {
        //
            $customers=DB::table('customers')
            ->get();
            $articles=DB::table('articles as art')
            ->select(DB::raw('CONCAT(art.code," ",art.name) as articles'),'art.id','art.stock','art.sale_total')
            ->where('art.state','=','activo')
            ->where('art.stock','>','0')
            -groupBy('articles','art.id','art.stock')
            ->get();
        return view ("sale.create",["customers"=>$customers,"articles=>$articles"]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaleFormRequest $request)
    {
        //
        try{
            DB::beginTransaction();
            $sale = new Sale;
            $sale -> customer_id = $request -> customer_id;
            $sale -> voucher_type = $request -> voucher_type;
            $sale -> voucher_series = $request -> voucher_series;
            $sale -> voucher_num = $request -> voucher_num;
            $sale -> sale_total = $request -> sale_total;
            $mytime = Carbon::now('America/La Paz');
            $sale -> date = $mytime -> toDayDateTimeString();
            $sale -> tax = '18';
            $sale -> state = 'A';
            $sale -> save();

            $article_id = $request -> article_id;
            $quantity = $request ->quantity ;
            $discounts = $request -> discounts;
            $sale_price = $request -> sale_price;

            $cont = 0;

            return redirect('provider');
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


        return view ("provider.show", ["provider"=> Provider::findOrFail($id)]);
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
        return view ("provider.edit", ["provider"=> Provider::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProviderFormRequest $request, $id)
    {
        //
        $provider = Provider::findOrFail($id);
        $provider -> name = $request ->name;
        $provider -> telefono = $request -> telefono ;
        $provider -> direccion = $request -> direccion;
        $provider -> description = $request -> description;
        $provider -> update();
        return redirect('provider');

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
        $provider =Provider::findOrFail($id);
        $provider -> delete();
        return redirect('provider');
    }
}

