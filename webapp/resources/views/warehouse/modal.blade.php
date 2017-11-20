<div class="modal fade modal-slide-in-right" aria-hidden="true"
     role="dialog" tabindex="-1" id="modal-delete-{{$warehouses->id}}">
    {!! Form::open(['method'=>'DELETE','route'=>['warehouse.destroy',$warehouses->id],'style'=>'display:inline']) !!}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Almacen</h4>
            </div>
            <div class="modal-body">
                <p>Esta seguro de eliminar <strong> {{ $warehouses->name }}</strong> de los Almacenes</p>
            </div>
            <div class="modal-footer">
                {!! Form::button('Si', array('type' => 'submit','class'=>'btn btn-success')) !!}
                {!! Form::button('No', array('type' => 'button','class'=>'btn btn-danger','data-dismiss'=>'modal')) !!}
            </div>
        </div>
    </div>
    {{Form::Close()}}

</div>
