{!! Form::open(array('url'=>'sale/create','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
    <div class="input-group">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario'])!!}
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
        <span class="input-group-btn">
            <h2> : </h2>
		</span>
        <span class="input-group-btn">
            <a href="customer/create"> <button type="button" class="btn btn-primary btn-sm"> Registrar</button> </a>
        </span>
    </div>

</div>

{{Form::close()}}