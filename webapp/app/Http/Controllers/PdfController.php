<?php

namespace App\Http\Controllers;

use App\Article;
use App\City;
use App\Product;
use Illuminate\Http\Request;
use App\Warehouses;
use App\Sale;
use Illuminate\Support\Facades\DB;
use Response;

class PdfController extends Controller
{

    public function crearPDF($warehouse,$vistaurl,$tipo)
    {

        $view =  \View::make($vistaurl, compact('warehouse'))->with('i')->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);

        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf'); }
    }


    public function crear_reporte($tipo){

        $vistaurl="warehouse/pdfView";

        $warehouses=Warehouses::all();
        $warehouse=array();
        $c=0;
        foreach ($warehouses as $sem) {
            $par=DB::table('articles')->where('warehouse_id','=',$sem->id)->sum('stock');
            $city=City::where('id', $sem->city)->first();
            if($par){$stock=$par;}else{$stock=0;}
            $warehouse[$c]=array(
                'id'=>$sem->id,
                'name'=>$sem->name,
                'volumen'=>$sem->volumen,
                'branches'=>$sem->branches,
                'city'=>$sem->city,
                'address'=>$sem->address,
                'user'=>$sem->user,
                'stock'=>$stock,
                'city'=>$city->name
            );
            $c++;
        }

        return $this->crearPDF($warehouse, $vistaurl,1);

    }
    public function reporte_xalmacen( $tipo){

        $vistaurl="warehouse/warehouse_prod";

        $article=DB::table('articles')
            ->select('*')
            ->where('warehouse_id', '=', $tipo)
            ->get();
        $articles=array();
        $c=0;
        foreach ($article as $sem) {
            $par=Product::where('id', $sem->product_id)->first();
            $ware=Warehouses::where('id', $sem->warehouse_id)->first();
            if($sem->stock!=0){$stock=$sem->stock;}else{$stock=0;}
            $articles[$c]=array(
                'id'=>$sem->id,
                'code'=>$sem->code,
                'name'=>$par->product_name,
                'description'=>$par->product_description,
                'product_date_up'=>$par->product_date_up,
                'stock'=>$stock,
                'name_ware'=>$ware->name
            );
            $c++;
        }

        return $this->crearPDF($articles, $vistaurl,1);

    }
    public function crear_factura($tipo){

        $vistaurl="Pdfactura";
        $sale=DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.id')
            ->join('saledetail', 'sales.id', '=', 'saledetail.sale_id')
            ->join('articles', 'articles.id', '=', 'saledetail.article_id')
            ->select('sales.*','customers.*','saledetail.*','articles.sale_price','articles.name as na_Pro')
            ->where('sales.id','=',$tipo)
            ->get();

        return $this->crearPDF($sale, $vistaurl,1);

    }
    public function crear_peps( $tipo){

        $vistaurl="Peps_inv";

        $articles=DB::table('art_vens')
            ->select('*')
            ->get();



        return $this->crearPDF($articles, $vistaurl,1);

    }

}