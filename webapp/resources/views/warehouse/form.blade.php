@section('title-description', 'Los campos con (*) son obligatorios')

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for=""> Nombre <strong style="color: #c82333">*</strong></label>
            {!! Form::text('name',null, array('placeholder' => 'Nombre','class' => 'form-control','onkeypress'=>'return soloLetrasNumeros(event)','maxlength'=>'20')) !!}
            <label for=""> Volumen <strong style="color: #c82333">*</strong></label>
            {!! Form::text('volumen',null, array('placeholder' => 'Volumen','class' => 'form-control','onkeypress'=>'return soloNumeros(event)','maxlength'=>'5')) !!}

            <label for=""> Sucursal <strong style="color: #c82333">*</strong></label>
            {!! Form::text('branches',null, array('placeholder' => 'Sucursal','class' => 'form-control','maxlength'=>'20')) !!}

            <label for="" class=""> Ciudad <strong style="color: #c82333">*</strong></label>
            {!! Form::select('city',array(
            ''=>'Seleccione una ciudad',
            1=>'La Paz',
            2=>'Cochabamba',
            3=>'Santa Cruz',
            4=>'Tarija',
            ),null, ['class' => 'form-control']) !!}

            <label for=""> Direccion <strong style="color: #c82333">*</strong></label>
            {!! Form::textarea('address',null, array('placeholder' => 'Direccion','class' => 'form-control','style'=>'height:100px','maxlength'=>'60')) !!}

            {{--<label for=""> Carnet responsable <strong style="color: #c82333">*</strong></label>--}}
            {{--{!! Form::text('user',null, array('placeholder' => 'CI','class' => 'form-control','onkeypress'=>'return soloNumerosLetras(event)')) !!}--}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">REGISTRAR</button>
    </div>
</div>