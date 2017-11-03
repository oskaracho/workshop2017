@extends('layouts.app')

@section('menu_customer', 'open active')
@section('title', 'Listado de Clientes')
@section('title-description', 'Administracion de Clientez ')

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <a href="customer/create"><button class="btn btn-success">NUEVO</button> </a>
                {{--dd($customers)--}}
                @include('customer.search')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
                        <thead>
                        <tr>
                            <td>Nombre</td>
                            <td>Documento </td>
                            <td>Direccion</td>
                            <td>Telefono</td>
                            <td>Correo</td>

                        </tr>
                        </thead>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->name}}</td>
                                <td>{{ $customer->document_type}}:{{ $customer->document_num}}</td>
                                <td>{{ $customer->address}}</td>
                                <td>{{ $customer->phone}}</td>
                                <td>{{ $customer->emaill}}</td>
                                <td>
                                    <a href="{{URL::action('CustomerController@edit',$customer->id)}}"><button class="btn btn-info">EDITAR</button> </a>
                                    <a href="" data-target="#modal-delete-{{$customer->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                </td>
                                @include('customer.modal')
                            </tr>

                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                </div>
                {{$customers->render()}}
            </div>
        </div>
    </section>
@endsection