{!! Form::open(array('url'=>'sale/create','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
    <div class="input-group">
        {!! Form::text('document_num',null,['class'=>'form-control','placeholder'=>'Cedula de Identidad'])!!}
    </div>
        <div class="input-group">
        <span class="input-group-btn">
			<button id="ale" type="submit" class="btn btn-primary">Buscar</button>
		</span>
        <span class="input-group-btn">
            <a href="customer/create"> <button type="button" class="btn btn-danger btn-sm"> Registrar</button> </a>
        </span>
    </div>

</div>

{{Form::close()}}
