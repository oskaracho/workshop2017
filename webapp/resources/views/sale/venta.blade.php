<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Workshop 2017 - @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
    <!-- Theme initialization -->
    <link rel="stylesheet" id="theme-style" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="main-wrapper">
    <div class="app" id="app">
        <header class="header">
            <div class="header-block header-block-collapse d-lg-none d-xl-none">
                <button class="collapse-btn" id="sidebar-collapse-btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <div class="header-block header-block-nav">
                <ul class="nav-profile">

                    <li class="profile dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <div class="img" style="background-image: url('https://avatars3.githubusercontent.com/u/3959008?v=3&s=40')"> </div>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="caret"></span>
                            </a>

                        </a>
                        <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">

                            <a  class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off icon"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <aside class="sidebar">
            <div class="sidebar-container">
                <div class="sidebar-header">
                    <div class="brand">
                        <div class="logo">
                            <img src="{{ asset('images/1.png') }}"width="180" height="90" >
                        </div>

                        <h3>----------------</h3>
                        <h3>-</h3>
                    </div>

                </div>
                @include('layouts.menu')
            </div>
            <footer class="sidebar-footer">
                <ul class="sidebar-menu metismenu" id="customize-menu">
                    <li>
                        <ul>
                            <li class="customize">
                                <div class="customize-item">
                                    <div class="row customize-header">
                                        <div class="col-4"> </div>
                                        <div class="col-4">
                                            <label class="title">fixed</label>
                                        </div>
                                        <div class="col-4">
                                            <label class="title">static</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="title">Sidebar:</label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="sidebarPosition" value="sidebar-fixed">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="sidebarPosition" value="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="title">Header:</label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="headerPosition" value="header-fixed">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="headerPosition" value="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <label class="title">Footer:</label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="footerPosition" value="footer-fixed">
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="col-4">
                                            <label>
                                                <input class="radio" type="radio" name="footerPosition" value="">
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="customize-item">
                                    <ul class="customize-colors">
                                        <li>
                                            <span class="color-item color-red" data-theme="red"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-orange" data-theme="orange"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-green active" data-theme=""></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-seagreen" data-theme="seagreen"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-blue" data-theme="blue"></span>
                                        </li>
                                        <li>
                                            <span class="color-item color-purple" data-theme="purple"></span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <a href="">
                            <i class="fa fa-cog"></i> Customize </a>
                    </li>
                </ul>
            </footer>
        </aside>
        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
        <div class="mobile-menu-handle"></div>
        <article class="content static-tables-page">
            <div class="title-block">
                <h1 class="title"> @yield('title') </h1>
                <p class="title-description"> @yield('title-description') </p>
            </div>


            <div class="card card-primary">
                <div class="card-header">
                    <div class="header-block">
                        <p class="title"> Registro Venta</p>
                    </div>
                </div>
                <div class="card-block">
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

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
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
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
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
                                <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <div class="box-placeholder">
                                            <div class="form-group">
                                                <label for="voucher_num">Numero Comprobante </label>
                                                <input type="text" name="voucher_num" value="{{old('voucher_num')}}" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {!! Form::label('specifics', 'Agregar Productos', ['class' => 'col-sm-12 col-form-label']); !!}

                            </div>
                    <div class="form-group row">
                        <div class="col-sm-12 col-form-label">
                            {{--<div class="box-placeholder">
                                <div class="form-group">
                                    <label for="customer">Cliente </label>
                                    <select name="id" id="id" class="form-control selectpicker" data-live-search="true" >
                                        @foreach($customers as $customer)
                                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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
                            <div class="box-placeholder">
                                <div class="form-group">
                                    <label for="voucher_num">Numero Comprobante </label>
                                    <input type="text" name="voucher_num" value="{{old('voucher_num')}}" placeholder="">
                                </div>
                            </div>
                            <div >
                                {!! Form::label('specifics', 'Agregar Productos', ['class' => 'col-sm-12 col-form-label']); !!}
                            </div>--}}

                        <div class="col-md-18">

                            {!! Form::button('Añadir  ', ['class' => 'btn btn-primary-outline',
                            'data-toggle' => 'modal',
                            'data-target' => '#specificsModal']); !!}
                            <div class="form-group">

                            </div>
                            <div class="form-group row">
                                <div id="xd">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>



    </div>
                    <div class="card">

                        <table  id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                            <thead style="background-color: #01DF3A">
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
                        <div class="form-group">
                            <button type="submit" id="guardar"  class="btn btn-primary">Guardar</button>

                        </div>
                    </div>
                    {{Form::Close()}}
          <br>
                    <br>
                    <div class="modal fade" id="specificsModal">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">
                                        <i class="fa fa-pencil"></i> Añadir Producto</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Producto</label>
                                        <select  id="pro_id" name="pro_id" class="selectpicker form-control"  data-width='100%'>
                                            <option value=""></option>
                                            @foreach($articles as $article)
                                                <option value="{{$article->id}}_{{$article->stock}}_{{$article->sale_price}}">{{$article->article}}</option>
                                            @endforeach
                                        </select>
                                        {{--<select class="selectpicker form-control" id="pro_id" name="pro_id" data-width='100%' >
                                            <option value="Lentes">Lentes</option>
                                            <option value="Casco">Casco</option>
                                            <option value="Gorra">Gorra</option>
                                        </select>--}}
                                    </div>

                                    <div class="form-group">
                                        <label for="quantity">Cantidad </label>
                                        <input type="number"  id="pquantity" class="form-control" placeholder="quantity" >
                                    </div>
                                    <div class="form-group">
                                        <label for="stock">Stock </label>
                                        <input type="number" disabled name="pstock" id="pstock" class="form-control" placeholder="stock" >
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_price">Precio Venta </label>
                                        <input type="number"  disabled name="psale_price" id="psale_price" class="form-control"  aria-describedby="emailHelp" >
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Descuento</label>
                                        <input type="number"  id="pdiscount" class="form-control" placeholder="discount" >
                                        <small id="traitHelp" class="form-text text-muted">Descuento</small>
                                    </div>
                                    <div class="form-group">
                                        <button type="button"  id="bt_add" class="btn btn-primary" >Agregar</button>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn1">Guardar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>


                </div>



        </article>
        <footer class="footer">
            <div class="footer-block buttons">
                <iframe class="footer-github-btn" src="https://ghbtns.com/github-btn.html?user=modularcode&repo=modular-admin-html&type=star&count=true" frameborder="0" scrolling="0" width="140px" height="20px"></iframe>
            </div>
            <div class="footer-block author">
                <ul>
                    <li> created by
                        <a href="https://github.com/modularcode">ModularCode</a>
                    </li>
                    <li>
                        <a href="https://github.com/modularcode/modular-admin-html#get-in-touch">get in touch</a>
                    </li>
                </ul>
            </div>
        </footer>
        <div class="modal fade" id="modal-media">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Media Library</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body modal-tab-container">
                        <ul class="nav nav-tabs modal-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#gallery" data-toggle="tab" role="tab">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#upload" data-toggle="tab" role="tab">Upload</a>
                            </li>
                        </ul>
                        <div class="tab-content modal-tab-content">
                            <div class="tab-pane fade" id="gallery" role="tabpanel">
                                <div class="images-container">
                                    <div class="row"> </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active in" id="upload" role="tabpanel">
                                <div class="upload-container">
                                    <div id="dropzone">
                                        <form action="/" method="POST" enctype="multipart/form-data" class="dropzone needsclick dz-clickable" id="demo-upload">
                                            <div class="dz-message-block">
                                                <div class="dz-message needsclick"> Drop files here or click to upload. </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Insert Selected</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <div class="modal fade" id="confirm-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">
                            <i class="fa fa-warning"></i> Alert</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure want to do this?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="js/app-template.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ asset('js/sale.js') }}"></script>
<script src="{{ asset('js/article.js') }}"></script>
</body>
</html>

