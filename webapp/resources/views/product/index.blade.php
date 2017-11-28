@extends('layouts.app')

@section('menu_product', 'open active')
@section('title', 'Listado de Tipos de Productos')
@section('title-description', 'Administración de los Tipos de Productos del Negocio')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-td">

            <div class="pull-right">
                <a href="{{route('product.create')}}" class="btn btn-success" style="color:#ffffff">Registrar Producto</a>
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
                <div class="card">
                    <table id="productTable">
                        <thead>
                        <tr>
                            <td>No</td>
                            <td>Id</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Fecha Alta</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productos as $pro)

                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{ $pro->code }}</td>
                                <td>{{ $pro->product_name }}</td>
                                <td>{{ $pro->product_description }}</td>
                                <td>{{ $pro->product_date_up }}</td>
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
    </section>
@endsection