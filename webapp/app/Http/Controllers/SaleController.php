<?php

namespace App\Http\Controllers;

use App\Article;
use App\ControlCode;
use App\Customer;
use Illuminate\Http\Request;

 use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SaleFormRequest;
use App\Sale;
use App\SaleDetail;
use Illuminate\Support\Facades\DB;
Use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class SaleController extends Controller
{
    //return view ('sale.index',compact(['sales','query']))  ->where('sales.voucher_num','LIKE','%'.$query.'%') ->join('saledetail','sales.id','=','saledetail.sale_id');
    public function _construct()
    {

    }

    public function index(Request $request)
    {

        if ($request)
        {

            /*$query=trim($request->get('searchText'));
            $providers = DB::table('providers')->get();*/
            $sales = DB::table('sales')
                ->join('customers','sales.customer_id','=','customers.id')
                ->select('sales.id','sales.date','customers.name','sales.voucher_type','sales.voucher_series','sales.voucher_num','sales.tax','sales.state','sales.sale_total')
                ->where('state','=','A')
                ->orderBy('sales.id','desc')
                ->groupby('sales.id','sales.date','customers.name','sales.voucher_type','sales.voucher_series','sales.voucher_num','sales.tax','sales.state')
                ->paginate(4);

            return view ('sale.index',["sales" =>$sales ]);

        }
    }

    public function create(Request $request)
    {
        //
            $customers1 = Customer::document($request -> get('document_num'))
                ->orderBy('id','DESC')
                ->paginate();
            $customers=DB::table('customers')
            ->get();
            $articles=DB::table('articles')
            ->select(DB::raw('CONCAT(articles.code,articles.name)As article'),'articles.id','articles.stock','articles.sale_price')
            ->where('articles.state','=','A')
            ->where('articles.stock','>','0')
            ->groupBy('article','articles.id','articles.stock')
            ->get();


        return view ("sale.venta",["customers"=>$customers,"articles"=>$articles,"customers"=>$customers1]);

    }


    public function store(SaleFormRequest $request)
    {
        /*
        $controlCode = new ControlCode();
        $code = $controlCode->generate(7904006306693,//
            $request->id,//
            $request->voucher_num,//
            str_replace('-','',date("Y-m-d")),//
            $request->sale_total,//
            'zZ7Z]xssKqkEf_6K9uH(EcV+%x+u[Cca9T%+_$kiLjT8(zr3T9b5Fx2xG-D+_EBS'
        )*/
        //dd($request);
        //try {
            DB::beginTransaction();
            $sale = new Sale;
            $sale->customer_id = $request->id;
            $sale->voucher_type = $request->voucher_type;
            $sale->voucher_series = '18';
            $sale->voucher_num = $request->voucher_num;
            $sale->sale_total = $request->sale_total;
            $mytime = Carbon::now('America/La_Paz');
            $sale->date = $mytime->toDayDateTimeString();
            $sale->tax = '18';
            $sale->number = $code;
        +   $sale->num_auto = 7904006306693;
            $sale->state = 'A';
            $sale->save();

            $article_id = $request->article;
            $quantity = $request->quantity;
            $discount = $request->discount;
            $sale_price = $request->sale_price;
            $stock = $request->stock;

            $cont = 0;
            while ($cont < count($article_id)) {
                $detail = new SaleDetail();
                $detail->sale_id = $sale->id;
                $detail->article_id = $article_id[$cont];
                $detail->quantity = $quantity[$cont];
                $detail->discount = $discount[$cont];
                $detail->sale_price = $sale_price[$cont];
                $detail->save();
                $articulo =Article::findOrFail($article_id[$cont]);
                $articulo->stock = (($stock[$cont])-($quantity[$cont]));
                $articulo->update();
                $cont = $cont + 1;
            }

            DB::commit();
       // }catch(\Exception $e)
        //{
          //  DB::rollback();
        //}
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
        $sale = DB::table('sales')
            ->join('customers','sales.customer_id','=','customers.id')
            ->join('saledetail','sales.id','=','saledetail.sale_id')
            ->select('sales.id','sales.date','customers.name','sales.voucher_type','sales.voucher_series','sales.voucher_num','sales.tax','sales.state','sales.sale_total')
            ->where('sales.id','=',$id)
            ->first();
        $detail=DB::table('saledetail')
            ->join('articles','saledetail.article_id','=','articles.id')
            ->select ('articles.name as article','saledetail.quantity','saledetail.discount','saledetail.sale_price')
            ->where('saledetail.sale_id','=',$id)
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
        $sale->state = 'C' ;
        $sale->update();
        return redirect('sale');
    }
}

