@extends('layouts.app')

@section('menu_product', 'open active')
@section('title', 'Listado de Productos')
@section('title-description', 'Administración de los productos del negocio')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
                        <thead>
                        <tr>
                            <td>Acciones</td>
                            <td>Nombre</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                            <td>Fecha Entrada</td>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection	