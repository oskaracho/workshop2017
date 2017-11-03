@extends('layouts.app')
@section('menu_customer', 'open active')
@section('title', 'Registro Clientes ')
@section('title-description', 'Administracion de Clientes ')
@section ('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Cliente</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(array('url'=>'customer','method'=>'POST','autocomplete'=>'off'))!!}
             {{Form::token()}}
            <div class="form-group">
                <label for="name1">Nombre * </label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label for="document_type1">Tipo de Documento   *</label>
                <input type="text" name="document_type" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="document_num1">Numero de Documento  </label>
                <input type="text" name="document_num" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="address1">Direccion </label>
                <input type="text" name="address" class="form-control" placeholder="description">
            </div>
            <div class="form-group">
                <label for="phone1">Telefono </label>
                <input type="text" name="phone" class="form-control" placeholder="description">
            </div>
            <div class="form-group">
                <label for="emaill1">Correo </label>
                <input type="text" name="emaill" class="form-control" placeholder="description">
            </div>
            <div class="form-group">
                <button href="" class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

             {{Form::close()}}

</div>
</div>
@endsection