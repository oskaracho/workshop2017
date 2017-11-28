{{--{{dump($warehouse)}}--}}
@extends('layouts.app')

@section('list_warehouse', 'open active')
@section('title', 'Lista de Almacenes')
@section('title-description', 'Lista de Almacenes')
@section('content')


    <div class="row">
        <div class="col-lg-12 margin-td">
            <div class="pull-left">
                <h2>LISTA DE ALMACENES</h2>
            </div>
            <div class="pull-right">
                <a href="../lista_almacenes/1" class="btn btn-warning" style="color:#ffffff">PDF</a>
            </div>
        </div>
    </div>

    @if($message =Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif
    <div class="panel panel-primary filterable">
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr class="filters">
                    <th>No</th>
                    <th><input type="text" class="form-control" placeholder="NOMBRE" style="width: 130px;"  disabled></th>
                    <th><input type="text" class="form-control" placeholder="VOLUMEN" style="width: 130px;" disabled></th>
                    <th><input type="text" class="form-control" placeholder="SUCURSAL" style="width: 130px;" disabled></th>
                    <th><input type="text" class="form-control" placeholder="CIUDAD" style="width: 130px;" disabled></th>
                    <th><input type="text" class="form-control" placeholder="DIRECCION" style="width: 130px;" disabled></th>
                    {{--<th><input type="text" class="form-control" placeholder="STOCK" style="width: 130px;" disabled></th>--}}
                    {{--<th><input type="text" class="form-control" placeholder="RESPONSABLE" style="width: 180px;" disabled></th>--}}
                    <th><button class="btn btn-info btn-xs btn-filter" style="color:#ffffff"><span class="glyphicon glyphicon-filter"></span> Buscar</button>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($warehouse as $warehouses)
                    <?php
                    $city="";
                        if($warehouses->city==1){$city="La Paz";}
                        else if($warehouses->city==2){$city="Cochabamba";}
                        else if($warehouses->city==3){$city="Santa Cruz";}
                        else if($warehouses->city==4){$city="Tarija";}

                    ?>
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $warehouses->name }}</td>
                        <td>{{ $warehouses->volumen }}</td>
                        <td>{{ $warehouses->branches }}</td>
                        <td>{{ $city }}</td>
                        <td>{{ $warehouses->address }}</td>
                        {{--<td>{{ $warehouses->stock }}</td>--}}
{{--                        <td>{{ $warehouses->user }}</td>--}}
                        <td><a href="../lista_almacenes/{{$warehouses->id}}" class="btn btn-warning" style="color:#ffffff">PDF</a></td>

                    </tr>
                @endforeach
                {{--{{var_dump($datos)}}--}}
                {{--@for ($i=0; $i<count($datos);$i++)--}}

                {{--<tr>--}}
                {{--<td>{{$i+1}}</td>--}}
                {{--<td>{{ $datos[$i]['name'] }}</td>--}}
                {{--<td>{{ $datos[$i]['volumen'] }}</td>--}}
                {{--<td>{{ $datos[$i]['branches'] }}</td>--}}
                {{--<td>{{ $datos[$i]['city'] }}</td>--}}
                {{--<td>{{ $datos[$i]['address'] }}</td>--}}
                {{--<td>{{ $datos[$i]['user'] }}</td>--}}
                {{--<td>--}}
                {{--<a href="{{route('warehouse.show',$warehouses->id)}}" class="btn btn-info">Mostrar</a>--}}
                {{--<a href="{{route('warehouse.edit',$datos[$i]['id'])}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>--}}
                {{--{!! Form::open(['method'=>'DELETE','route'=>['warehouse.destroy',$datos[$i]['id']],'style'=>'display:inline']) !!}--}}
                {{--{!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', array('type' => 'submit','class'=>'btn btn-danger')) !!}--}}
                {{--{!! Form::close() !!}--}}

                {{--</td>--}}
                {{--</tr>--}}
                {{--@endfor--}}
                </tbody>
            </table>

        </div>
    </div>

@endsection