@extends('layouts.app')

@section('menu_product', 'open active')
@section('title', 'Listado de Tipos de Productos')
@section('title-description', 'Administración de los Tipos de Productos del Negocio')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="productTable">
                        <thead>
                        <tr>
                            <td>Id</td>
                            <td>Tipo de Producto</td>
                            <td>Descripción</td>
                            <td>Fecha Alta</td>
                            <td>Accion</td>
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