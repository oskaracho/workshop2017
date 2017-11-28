{!! Form::open(array('url'=>'article/create','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
        <div class="form-group">
            <label for="code">Codigo * </label>
            {!! Form::text('codePro',null,['class'=>'form-control','placeholder'=>'Codigo Producto','requited'])!!}

        </div>
    <div class="input-group">
        <span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar</button>
		</span>
    </div>

</div>

{{Form::close()}}