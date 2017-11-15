@extends('layouts.app')
@section('menu_sale', 'open active')
@section('title', 'Nueva Venta ')
@section('title-description', 'Administracion ')
@section ('content')


    <meta name="csrf-token" content="{!! Session::token() !!}">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Registro </h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

           {{--@include('sale.search')--}}
            @include('sale.search')

            {{ Form::open(array('url'=>'sale','method'=>'POST','autocomplete'=>'off'))}}



        </div>
    </div>
    <section class="section">
        <div class="row sameheight-container">
            <div class="col-md-12">
                <div class="card sameheight-item">
                    <div class="card-block">
                        <div class="card-title-block">

                        </div>
                        <section class="section">
                            <p></p>

                            <div class="row">
                                <div class="col-md-3 col-md-push-3">
                                    <div class="box-placeholder">
                                        <div class="form-group">
                                            <label for="customer">Cliente </label>
                                            <select name="id" id="id" class="form-control selectpicker" data-live-search="true" >
                                                @foreach($customers as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-push-3">
                                    <div class="box-placeholder">
                                        <div class="form-group">
                                            <label>Tipo de Comprobante</label>
                                            <select name="voucher_type"  class="form-control">
                                                <option value="Boleta">Boleta</option>
                                                <option value="Factura">Factura</option>
                                                <option value="Ticket">Ticket</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <div class="box-placeholder">
                                        <div class="form-group">
                                            <label for="voucher_series">Serie Comprobante</label>
                                            <input type="text" name="voucher_series" value="{{old('voucher_series')}}" placeholder=" ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <div class="box-placeholder">
                                        <div class="form-group">
                                            <label for="voucher_num">Numero Comprobante </label>
                                            <input type="text" name="voucher_num" value="{{old('voucher_num')}}" placeholder="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <section class="section">
                <div class="row">
                    <div class="col-12 .col-md-8">
                        <div class="card card-primary ">
                            <div class="card-header">
                                <div class="header-block">
                                    <p class="title">  </p>
                                </div>
                            </div>
                            <div class="card-block">
                                <section class="section">
                                    <p></p>
                                    <div class="row">
                                        <div class="col-md-4 col-md-push-3">
                                            <div class="box-placeholder">
                                                <div class="form-group">
                                                    <label >Articulo</label>
                                                    <select name="pidarticulo" id="pidarticulo" class="form-control selectpicker"  data-live-search="true">
                                                        <option value=""></option>
                                                        @foreach($articles as $article)
                                                            <option value="{{$article->id}}_{{$article->stock}}_{{$article->sale_price}}">{{$article->article}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-pull-9">
                                            <div class="box-placeholder">
                                                <div class="form-group">
                                                    <label for="quantity">Cantidad </label>
                                                    <input type="number" name="pquantity" id="pquantity" class="form-control" placeholder="quantity" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-pull-9">
                                            <div class="box-placeholder">
                                                <div class="form-group">
                                                    <label for="stock">Stock </label>
                                                    <input type="number" disabled name="pstock" id="pstock" class="form-control" placeholder="stock" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-pull-9">
                                            <div class="box-placeholder">
                                                <div class="form-group">
                                                    <label for="sale_price">Precio Venta </label>
                                                    <input type="number"  disabled name="psale_price" id="psale_price" class="form-control" placeholder="sale_price" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-md-pull-9">
                                            <div class="box-placeholder">
                                                <div class="form-group">
                                                    <label for="discount">Descuento</label>
                                                    <input type="number" name="pdiscount" id="pdiscount" class="form-control" placeholder="discount" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                                        <div class="form-group">
                                            <button type="button"  id="bt_add" class="btn btn-primary" >Agregar</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                        <div class="card">
                                            <table  id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                                                <thead style="background-color: #A9D0F5">
                                                <th>Opciones</th>
                                                <th>Articulo</th>
                                                <th>Cantidad</th>
                                                <th>Precio Venta</th>
                                                <th>Descuento</th>
                                                <th>Subtotal</th>
                                                </thead>
                                                <tfoot>
                                                <th>TOTAL</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>

                                                <th>
                                                    <h4 id="total">s/. 0.00</h4>
                                                    <input type="hidden" name="sale_total" id="sale_total">
                                                </th>
                                                </tfoot>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
                                        <div class="form-group">
                                            <input name="_token" value="{{csrf_token()}}" type="hidden" >
                                            <button  class="btn btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-danger" type="reset">Cancelar</button>
                                        </div>
                                    </div>

                                    <td><input type="number" name="quantity[]"  ></td>
                                </section>

                            </div>

                        </div>
                    </div>
                </div>

            </section>
           </div>
       </div>

             {{Form::close()}}
</div>
</div>


@endsection