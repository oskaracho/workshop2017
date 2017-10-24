<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SaleFormRequest;
use App\Sale;
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
                ->join('customers as c','s.customer_id','=','c.id')
                ->join('saledetail as sd','s.id','=','sd.sale_id')
                ->select('s.id','s.date','c.name','s.voucher_type','s.voucher_series','s.voucher_num','s.tax','s.state','s.sale_total')
                ->where('s.voucher_num','LIKE','%'.$query.'%')
                ->orderBy('s.id','desc')
                ->groupby('s.id','s.date','c.name','s.voucher_type','s.voucher_series','s.voucher_num','s.tax','s.state')
                ;

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
        try {
            DB::beginTransaction();
            $sale = new Sale;
            $sale->customer_id = $request->customer_id;
            $sale->voucher_type = $request->voucher_type;
            $sale->voucher_series = $request->voucher_series;
            $sale->voucher_num = $request->voucher_num;
            $sale->sale_total = $request->sale_total;
            $mytime = Carbon::now('America/La Paz');
            $sale->date = $mytime->toDayDateTimeString();
            $sale->tax = '18';
            $sale->state = 'A';
            $sale->save();

            $article_id = $request->article_id;
            $quantity = $request->quantity;
            $discount = $request->discount;
            $sale_price = $request->sale_price;

            $cont = 0;
            while ($cont < count($article_id)) {
                $detail = new SaleDetail();
                $detail->sale_id = $sale->id;
                $detail->article_id = $article_id[$cont];
                $detail->quantity = $quantity[$cont];
                $detail->discount = $discount[$cont];
                $detail->sale_price = $sale_price[$cont];
                $detail->save();
                $cont = $cont + 1;
            }

            DB::commit();
        }catch(\Exception $e)
        {
            DB::rollback();
        }
        return redirect('sale');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = DB::table('sales as s')
            ->join('customers as c','s.customer_id','=','c.id')
            ->join('saledetail as sd','s.id','=','sd.sale_id')
            ->select('s.id','s.date','c.name','s.voucher_type','s.voucher_series','s.voucher_num','s.tax','s.state','s.sale_total')
            ->where('s.id','=',$id)
            ->first();
        $detail=DB::table('saledetail as sd')
            ->join('articles as a','sd.sale_id','=','a.id')
            ->select ('a.name as article','sd.quantity','sd.discount','sd.sale_price')
            ->where('sd.sale_id','=',$id)
            ->get();
        return view ("sale.show",["sale"=>$sale,"detail"=>$detail]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        //
        $sale =Sale::findOrFail($id);
        $sale->State = 'C' ;
        $sale->update();
        return redirect('sale');
    }
}

