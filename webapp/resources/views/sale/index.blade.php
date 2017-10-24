@extends('layouts.app')

@section('menu_provider', 'open active')
@section('title', 'LISTADO DE VENTAS  ')
@section('title-description', 'Administracion de Proveedores ')

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <a href="sale/create"><button class="btn btn-success">NUEVO</button> </a>
                @include('sale.search')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
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
                        @foreach($sales as $sal)
                            <tr>
                                <td>{{ $sal->date}}</td>
                                <td>{{ $sal->name}}</td>
                                <td>{{ $sal->voucher_type.':'.$sal->voucher_series.'-'.$sal->voucher_num}}</td>
                                <td>{{ $sal->tax}}</td>
                                <td>{{ $sal->sale_total}}</td>
                                <td>{{ $sal->state}}</td>
                                <td>
                                    <a href="{{URL::action('SaleController@show',$sal->id)}}"><button class="btn btn-info">Detalles</button> </a>
                                    <a href="" data-target="#modal-delete-{{$sal->id}}" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
                                </td>
                                @include('sale.modal')
                            </tr>

                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                </div>
                {{$sales->render()}}
            </div>
        </div>
    </section>
@endsection