@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>REGISTAR PRODUCTO</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Volver</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(array('route' => 'product.store','method'=>'POST','autocomplete'=>'off')) !!}
            @include('product.form')
            {!! Form::close() !!}
        </div>
        <div class="col-md-6">
            @if (count($errors) > 0)

                <div class="alert alert-danger">
                    <strong>Por Favor!</strong> Llenar todos los campos requeridos (*)
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
        </div>

    </div>

@endsection