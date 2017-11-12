@extends('layouts.app')

@section('menu_warehouse', 'open active')
@section('title', 'Administracion de Almacenes')
@section('title-description', 'Administración de Almacenes')

@section('content')
    <div class="container">
            <ul class="nav nav-tabs nav-justified" role="tablist" >
                <li role="presentation" class="active"><a href="#listWh" aria-controls="listWh" role="tab" data-toggle="tab">Lista Almacenes </a></li>
                <li role="presentation"><a href="#creWh" aria-controls="creWh" role="tab" data-toggle="tab"> Registro Almacenes </a></li>
                <li role="presentation"><a href="#modWh" aria-controls="modWh" role="tab" data-toggle="tab"> Modificacion Almacenes </a></li>
                <li role="presentation"><a href="#delWh" onclick="" aria-controls="delWh" role="tab" data-toggle="tab"> Inhabilitacion Almacenes</a></li>
            </ul>
            <div class="tab-content">
                <div id="listWh" class="tab-pane fade in active"><br>
                        <div class="panel-group">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-6 ">
                                        <div class="panel panel-primary">
                                            <div class="panel-body">

                                                @if (count($errors)>0)
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{$error}}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                {{ Form::open(array('Route'=>'store','method'=>'POST','autocomplete'=>'off'))}}
                                                <label for="">Nombre almacen</label>
                                                <input type="text" id="" class="form-control" name="name" placeholder="Nombre almacen">
                                                <label for="">Volumen almacen</label>
                                                <input type="text" id="" class="form-control" name="volumen" placeholder="Volumen">

                                                <label for="">Sucursal</label>
                                                <input type="text" id="" class="form-control" name="branches" placeholder="Sucursal">

                                                <label for="" class="">Ciudad</label>
                                                <select id="" class="form-control" name="city">
                                                    <option value="">Seleccione una ciudad</option>
                                                    <option value="1">La Paz</option>
                                                    <option value="2">Cochabamba</option>
                                                    <option value="3">Santa Cruz</option>
                                                    <option value="4">Tarija</option>
                                                </select>

                                                <label for="">Direccion</label>
                                                <input type="text" id="" class="form-control" name="address" placeholder="Direccion">

                                                <label for="">Carnet responsable</label>
                                                <input type="text" id="" class="form-control" name="ci" placeholder="Direccion">
                                                <br>
                                                <div class="form-group">
                                                    <div class="col-sm-11 col-sm-offset-1" align="center">
                                                        <button type="submit" class="btn btn-success">Registrar</button>
                                                        <button type="submit" class="btn btn-danger">Cancelar</button>
                                                    </div>
                                                </div>

                                                {{Form::close()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="tab-pane fade" id="creWh"><br>
                <div class="container">
                    <div class="panel-group">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="modWh"><br>
                <div class="container">
                    <div class="panel-group">

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="delWh"><br>
                <div class="container">
                    <div class="panel-group">

                    </div>
                </div>
            </div>

    </div>
@endsection

