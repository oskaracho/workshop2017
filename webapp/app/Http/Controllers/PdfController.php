<?php

namespace App\Http\Controllers;

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
        $warehouse=Warehouses::all();

        return $this->crearPDF($warehouse, $vistaurl,$tipo);

    }
    public function crear_factura($tipo){

        $vistaurl="Pdfactura";
        $sale=DB::table('sales')
            ->join('customers', 'sales.customer_id', '=', 'customers.id')
            ->join('saledetail', 'sales.id', '=', 'saledetail.sale_id')
            ->join('articles', 'articles.id', '=', 'saledetail.article_id')
            ->select('sales.*','customers.*','saledetail.*','articles.sale_price','articles.name as na_Pro')
            ->get();

        return $this->crearPDF($sale, $vistaurl,$tipo);

    }
}