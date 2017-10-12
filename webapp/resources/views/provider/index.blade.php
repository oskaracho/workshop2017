@extends('layouts.app')

@section('menu_provider', 'open active')
@section('title', 'Listado de Proveedores')
@section('title-description', 'Administracion de Proveedores ')

@section('content')

    <section class="section">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <a href="provider/create"><button class="btn btn-success">NUEVO</button> </a>
                @include('provider.search')
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <table id="mainTable">
                        <thead>
                        <tr>
                            <td>Numero</td>
                            <td>Nombre</td>
                            <td>Telefono</td>
                            <td>Direccion</td>
                            <td>Descripcion</td>
                        </tr>
                        </thead>
                        @foreach($providers as $provider)
                            <tr>
                                <td>{{ $provider->id}}</td>
                                <td>{{ $provider->name}}</td>
                                <td>{{ $provider->telefono}}</td>
                                <td>{{ $provider->direccion}}</td>
                                <td>{{ $provider->description}}</td>
                                <td>
                                    <a href="{{URL::action('ProviderController@edit',$provider->id)}}"><button class="btn btn-info">EDITAR</button> </a>
                                    <a href="" data-target="#modal-delete-{{$provider->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                                </td>
                                @include('provider.modal')
                            </tr>

                        @endforeach
                        <tbody>
                        </tbody>
                    </table>
                </div>
                {{$providers->render()}}
            </div>
        </div>
    </section>
@endsection