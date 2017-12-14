@extends('layouts.app')

@section('menu_product', 'open active')
@section('title', 'Listado de Tipos de Productos')
@section('title-description', 'Administración de los Tipos de Productos del Negocio')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-td">

            <div class="pull-right">
                <a href="{{route('product.create')}}" class="btn btn-success" style="color:#ffffff">Registrar Producto</a>

                <a href="../pp/1" class="btn btn-warning" style="color:#ffffff">PEPS</a>
            </div>
        </div>
    </div>

    @if($message =Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary filterable">
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr class="filters">
                                <th>No</th>
                                <th><input type="text" class="form-control" placeholder="Id"  disabled></th>
                                <th><input type="text" class="form-control" placeholder="Nombre" disabled></th>
                                <th><input type="text" class="form-control" placeholder="Descripción"  disabled></th>
                                <th><input type="text" class="form-control" placeholder="Fecha Alta" style="width: 150px" disabled></th>
                                <th><button class="btn btn-info btn-xs btn-filter" style="color:#ffffff"><span class="glyphicon glyphicon-filter"></span> Buscar</button>
                                </th>
                            </tr>
                            </thead>

                        <tbody>
                        @foreach($productos as $pro)
<?php
$fechaqr = explode(" ",$pro->product_date_up);
$separa4 = explode("-",$fechaqr[0],4);
$ano_fac3 = $separa4[0];
$mes_fac3 = $separa4[1];
$dia_fac3 = $separa4[2];
$separa5 = $dia_fac3.'/'.$mes_fac3.'/'.$ano_fac3;
?>
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $pro->code }}</td>
                                <td>{{ $pro->product_name }}</td>
                                <td>{{ $pro->product_description }}</td>
                                <td>{{ $separa5 }}</td>
                                <td>
                                    <a href="{{route('product.edit',$pro->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a>
                                    <a href="" data-target="#modal-delete-{{$pro->id}}" data-toggle="modal"><button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button></a>
                                </td>
                            </tr>
                            @include('product.modal')
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection