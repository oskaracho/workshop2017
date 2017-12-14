@extends('layouts.app')

@section('menu_sale', 'open active')
@section('title', 'LISTADO DE VENTAS  ')
@section('title-description', 'Planilla ')

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <a href="sale/create"><button class="btn btn-success">NUEVO</button> </a>
                {{--@include('sale.search')--}}
            {{--dd($sales)--}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table  id="mainTable">
                        <thead>
                        <tr>
                            <td>Fecha</td>
                            <td>Cliente</td>
                            <td>Comprobante</td>
                            <td>Impuesto</td>
                            <td>Total</td>
                            <td>Estado</td>
                            <td>Opciones</td>
                        </tr>
                        </thead>
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{ $sale->date}}</td>
                                <td>{{ $sale->name}}</td>
                                <td>{{ $sale->voucher_type.':'.$sale->voucher_series.'-'.$sale->voucher_num}}</td>
                                <td>{{ $sale->tax}}</td>
                                <td>$ {{ $sale->sale_total}}</td>
                                <td>{{ $sale->state}}</td>
                                <td>
                                    <a href="{{URL::action('SaleController@show',$sale->id)}}"><button class="btn btn-info">Detalle</button> </a>
                                    <a href="" data-target="#modal-delete-{{$sale->id}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
                                    <a href="{{URL::action('PdfController@crear_factura',$sale->id)}}"><button class="btn btn-danger">Ver Factura </button></a>
                                </td>
                                @include('sale.modal')
                            </tr>
                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                    {{$sales->render()}}

                </div>

            </div>
        </div>
    </section>
@endsection