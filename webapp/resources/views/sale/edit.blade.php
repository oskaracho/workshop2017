@extends('layouts.app')
@section('menu_sale', 'open active')
@section('title', 'Editar Proveedores ')
@section('title-description', 'Administracion de Proveedores ')
@section ('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Editar Proveedor</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ Form::model ($provider,['method'=>'PATCH', 'route'=>['provider.update',$provider->id]])}}
            {{Form::token()}}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" class="form-control" value="{{$provider->name}}" placeholder="name">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="{{$provider->telefono}}" placeholder="telefono">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="{{$provider->direccion}}" placeholder="direccion">
            </div>
            <div class="form-group">
                <label for="description">Descripción</label>
                <input type="text" name="description" class="form-control" value="{{$provider->description}}" placeholder="description">
            </div>
            <div class="form-group">
                <button href="" class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {{Form::close()}}

        </div>
    </div>
@endsection