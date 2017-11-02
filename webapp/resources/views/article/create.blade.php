@extends('layouts.app')
@section('menu_provider', 'open active')
@section('title', 'Planilla de Registros ')
@section('title-description', '======================= ')
@section ('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nuevo Articulo</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ Form::open (array('url'=>'article','method'=>'POST','autocomplete'=>'off'))}}
             {{Form::token()}}
            <div class="form-group">
                <label for="code">Codigo * </label>
                <input type="number" name="code" class="form-control" placeholder="code">
            </div>
            <div class="form-group">
                <label for="name">Nombre *</label>
                <input type="text" name="name" class="form-control" placeholder="name">
            </div>
            <div class="form-group">
                <label for="stock">Stock * </label>
                <input type="number" name="stock" class="form-control" placeholder="stock">
            </div>
            <div class="form-group">
                <label for="state">Estado * </label>
                <input type="text" name="state" class="form-control" placeholder="state">
            </div>
            <div class="form-group">
                <label for="sale_price">Precio Venta * </label>
                <input type="number" name="sale_price" class="form-control" placeholder="sale_price">
            </div>
            <div class="form-group">
                <button href="" class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

             {{Form::close()}}

</div>
</div>
@endsection