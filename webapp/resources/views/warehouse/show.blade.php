@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-td">
            <div class="pull-left">
                <h2>Show </h2>
            </div>
            <div class="pull-right">
                <a href="{{route('warehouse.index')}}" class="btn btn-primary">back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nombre</strong>
                {{$warehouse->nombre}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>volumen</strong>
                {{$warehouse->volumen}}
            </div>
        </div>
    </div>
@endsection