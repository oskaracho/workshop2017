{!! Form::open(array('url'=>'sale/create','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
    <div class="input-group">
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre de Usuario'])!!}
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
    </div>
</div>

{{Form::close()}}