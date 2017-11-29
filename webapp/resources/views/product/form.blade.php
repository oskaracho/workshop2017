@section('title-description', 'Los campos con (*) son obligatorios')

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <label for=""> Nombre <strong style="color: #c82333">*</strong></label>
            {!! Form::text('product_name',null, array('placeholder' => 'Nombre','class' => 'form-control','onkeypress'=>'return soloLetrasNumeros(event)','maxlength'=>'60')) !!}
            <label for=""> Codigo <strong style="color: #c82333">*</strong></label>
            {!! Form::text('code',null, array('placeholder' => 'Codigo','class' => 'form-control','onkeypress'=>'return soloNumeros(event)','maxlength'=>'20')) !!}
            <label for=""> Descripcion <strong style="color: #c82333">*</strong></label>
            {!! Form::textarea('product_description',null, array('placeholder' => 'Descripcion','class' => 'form-control','style'=>'height:100px','maxlength'=>'60')) !!}


            </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">REGISTRAR</button>
    </div>
</div>