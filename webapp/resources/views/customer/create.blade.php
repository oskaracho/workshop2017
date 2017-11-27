@extends('layouts.app')
@section('menu_customer', 'open active')
@section('title', 'Registro Clientes ')
@section('title-description', 'Administracion de Clientes ')
@section ('content')


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="card card-primary">
            <div class="card-header">
                <div class="header-block">
                    <p class="title">  </p>
                </div>
            </div>
            <div class="card-block">
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
                    {{Form::open(array('url'=>'customer','method'=>'POST','autocomplete'=>'off'))}}
                    {{Form::token()}}
                    <div class="form-group">
                        {!! Form::label('name1', 'Nombre') !!}
                        {!! Form::text('name', null, ['class' => 'form-control' ]) !!}
                    </div>
                    {{--<div class="form-group">
                        <label for="name1">Nombre * </label>
                        <input type="text" name="name" class="form-control" placeholder="name">
                    </div>--}}
                    <div class="form-group">
                        <label>Tipo de Documento</label>
                        <select name="document_type"  class="form-control">
                            <option value="Carnet">Carnet</option>
                        </select>
                    </div>
                    {{-- <div class="form-group">
                         <label for="document_type1">Tipo de Documento   *</label>
                         <input type="text" name="document_type" class="form-control" placeholder="">
                     </div>--}}
                        <div class="form-group">
                            {!! Form::label('document_num1', 'Numero de Documento') !!}
                            {!! Form::number('document_num', null, ['class' => 'form-control','required' => 'required' ]) !!}
                        </div>
                    <div class="form-group">
                        {!! Form::label('address1', 'Direccion') !!}
                        {!! Form::TEXT('address', null, ['class' => 'form-control' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone1', 'Telefono') !!}
                        {!! Form::number('phone', null, ['class' => 'form-control' ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('emaill1', 'E-Mail') !!}
                        {!! Form::email('emaill', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                    </div>

                    {{--<div class="form-group">
                        <label for="emaill1">Correo* </label>
                        <input type="text" name="emaill" class="form-control" placeholder="description">
                    </div>--}}
                    <div class="form-group">
                        <button href="" class="btn btn-primary" type="submit">Guardar</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>

                    {{Form::close()}}

                </div>
            </div>
            <div class="card-footer">  </div>
        </div>
    </div>
@endsection