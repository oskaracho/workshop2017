@extends('layouts.app')
@section('menu_article', 'open active')
@section('title', 'Planilla de Registros ')
@section('title-description', '======================= ')
@section ('content')
    <?php use App\Http\Controllers\WarehouseController;
    $list=WarehouseController::warehouseList();
    ?>
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
            @include('article.product_search')
{{--{{dump($product)}}--}}
            {{ Form::open (array('url'=>'article','method'=>'POST','autocomplete'=>'off'))}}
            {{Form::token()}}
@if(count($product)>0)
            <div class="form-group">
                <label for="name">Nombre *</label>
                @foreach($product as $pro)
                    <input type="text" class="form-control"  value="{{ $pro->product_name }}" placeholder="name" disabled>
                    <input type="text" name="product_id" value="{{ $pro->id }}" style="display: none">
                    <input type="text" name="code" value="{{ $pro->code }}" style="display: none">
                    <input type="text" name="name" value="{{ $pro->product_name }}" style="display: none">

                @endforeach

            </div>
            {{--ALMACENES--}}
            <div class="form-group">
                <label for="name">Seleccione Almacen *</label>
                <select name="warehouse_id" class="form-control">
                    <option></option>
                    @for ($i=0; $i<count($list);$i++)
                    <option value="{{ $list[$i]['id'] }}" > {{ $list[$i]['name'] }} </option>
                    @endfor
                </select>
            </div>
            {{--ALMACENES--}}
            <div class="form-group">
                <label for="stock">Stock * </label>
                <input type="number" name="stock" class="form-control" value="1" placeholder="stock">
            </div>
            <div class="form-group">
                <label for="state">Estado * </label>
                <input type="text" name="state" class="form-control" value="A" placeholder="state">
            </div>
            <div class="form-group">
                <label for="sale_price">Precio Venta * </label>
                <input type="text" name="sale_price" class="form-control" value="{{ old('sale_price') }}" placeholder="sale_price" onkeypress="return soloNumeros(event)">
            </div>
            <div class="form-group">
                <button href="" class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
            {{Form::close()}}
@endif
        </div>
    </div>
@endsection