@extends('layouts.app')
@section('menu_sale', 'open active')
@section('title', 'Editar Proveedores ')
@section('title-description', 'Administracion de Proveedores ')
@section ('content')
    <h3>Detalle Ventas</h3>
    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card card-primary">
        <div class="card-header">
            <div class="header-block">
                <p class="title"> Detalle </p>
            </div>
        </div>
        <div class="card-block">

            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="form-group">
                        <label for="">Cliente</label>
                        <p>{{$sale->name}}</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="">Tipo Comprobante</label>
                        <p>{{$sale->voucher_type}}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="num_comprobante">Numero Comprobante</label>
                        <p>{{$sale->voucher_num}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="card">
                        <table  id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color: #01DF3A">
                            <th>Articulo</th>
                            <th>Cantidad</th>
                            <th>Precio Venta</th>
                            <th>Descuento</th>
                            <th>Subtotal</th>
                            </thead>
                            <tfoot>
                            <th>TOTAL</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>

                            <th>
                                <h4 >$.{{$sale->sale_total}}</h4>
                            </th>
                            </tfoot>
                            <tbody>
                            @foreach($detail as $det)
                                <tr>
                                    <td>{{$det->article}}</td>
                                    <td>{{$det->quantity}}</td>
                                    <td>{{$det->sale_price}}</td>
                                    <td>{{$det->discount}}</td>
                                    <td>{{$det->quantity * $det->sale_price - $det->discount}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">  </div>
    </div>




        </div>
    </div>
@endsection