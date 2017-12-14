
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
    <script type="text/javascript" src={{ asset('https://www.gstatic.com/charts/loader.js')}}></script>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>


</head>
<body>
{{--dd($products)--}}
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
                                {{ Auth::user()->name }} <span class="caret"></span>
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
                <nav class="menu">
                    <ul class="sidebar-menu metismenu" id="sidebar-menu">
                        <li class="@yield('menu_customer','')">
                            <a href="customer">
                                <i class="fa fa-home"></i> Clientes </a>
                        </li>
                        <li class="@yield('menu_provider','')">
                            <a href="provider">
                                <i class="fa fa-th-large"></i> Proveedores
                                <i class="fa arrow"></i>
                            </a>

                        </li>
                        <li class="@yield('menu_article','')">
                            <a href="article">
                                <i class="fa fa-home"></i> Articulos  </a>
                        </li>
                        <li class="@yield('menu_sale','')">
                            <a href="sale">
                                <i class="fa fa-home"></i> Venta  </a>
                        </li>
                        <li class="@yield('menu_report','')">
                            <a href="dashboard">
                                <i class="fa fa-home"></i> Dashword  </a>
                        </li>
                        <li class="@yield('menu_catalog','')">
                            <a href="index.html">
                                <i class="fa fa-home"></i> Catalogo  </a>
                        </li>
                        {{--<li class="@yield('menu_warehouse','')">--}}
                        {{--<a href="">--}}
                        {{--<i class="fa fa-th-large"></i> Almacenes--}}
                        {{--</a>--}}

                        {{--</li>--}}
                        <li>
                            <a class="@yield('menu_warehouse','')">
                                <i class="fa fa-table"></i> Almacenes
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav collapse" style="">
                                <li>
                                    <a href="warehouse"> Administracion </a>
                                </li>
                                <li>
                                    <a href="list"> Listas </a>
                                </li>
                            </ul>
                        </li>
                        <li class="@yield('menu_catalog','')">
                            <a href="product">
                                <i class="fa fa-home"></i> Productos  </a>
                        </li>


                    </ul>
                </nav>

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
            <section class="section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <section class="section">
                                <div class="row sameheight-container">
                                    <div class="col-md-12">
                                        <div class="card sameheight-item">
                                            <div class="card-block">
                                                <div class="card-title-block">
                                                    <h3 class="title">  </h3>
                                                </div>
                                                <section class="section">
                                                    <div class="row">

                                                        <div class="col-md-4 col-md-push-4">
                                                            <h3>TOTAL VENTAS ANUAL</h3>

                                                            <div class="box-placeholder"><h1>{{ $sales}}</h1></div>
                                                        </div>
                                                        <div class="col-md-4 col-md-pull-4">
                                                            {{--{{dd($ingresos)}};--}}
                                                            <h3>TOTAL INGRESOS ANUAL</h3>
                                                            <div class="box-placeholder">
                                                                <h1>
                                                                    @foreach($ingresos as $in)
                                                                        {{ $in->total_sales}}Bs
                                                                    @endforeach

                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                        <script type="text/javascript">
                                                            google.charts.load('current', {'packages':['gauge']});
                                                            google.charts.setOnLoadCallback(drawChart);

                                                            function drawChart() {

                                                                var data = google.visualization.arrayToDataTable([
                                                                    ['Label', 'Value'],
                                                                    ['Ventas', 80],
                                                                    ['Ingresos', 55],
                                                                    ['Clientes', 68]
                                                                ]);

                                                                var options = {
                                                                    width: 400, height: 120,
                                                                    redFrom: 90, redTo: 100,
                                                                    yellowFrom:75, yellowTo: 90,
                                                                    minorTicks: 5
                                                                };

                                                                var chart = new google.visualization.Gauge(document.getElementById('ale'));

                                                                chart.draw(data, options);

                                                                setInterval(function() {
                                                                    data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
                                                                    chart.draw(data, options);
                                                                }, 13000);
                                                                setInterval(function() {
                                                                    data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
                                                                    chart.draw(data, options);
                                                                }, 5000);
                                                                setInterval(function() {
                                                                    data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
                                                                    chart.draw(data, options);
                                                                }, 26000);
                                                            }
                                                        </script>
                                                        <div id="ale" style="width: 400px; height: 120px;"></div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <script type="text/javascript" src={{ asset('https://www.gstatic.com/charts/loader.js')}}></script>
                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart']});
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {

                                    var data = google.visualization.arrayToDataTable([
                                        ['Productos Vnedidos', 'Mes'],
                                            @foreach($saledetail as $saledetails)
                                              ['{{$saledetails->name}}',{{$saledetails->total_ventas}}],
                                           @endforeach
                                    ]);

                                    var options = {
                                        title: 'Reporte Anual'
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                    chart.draw(data, options);
                                }
                            </script>
                            <div id="piechart" style="width: 900px; height: 500px;">
                            </div>
                            <script type="text/javascript" src={{ asset('https://www.gstatic.com/charts/loader.js')}}></script>
                            <script type="text/javascript">
                                google.charts.load('current', {'packages':['corechart', 'bar']});
                                google.charts.setOnLoadCallback(drawStuff);

                                function drawStuff() {

                                    var button = document.getElementById('change-chart');
                                    var chartDiv = document.getElementById('chart_div');

                                    var data = google.visualization.arrayToDataTable([
                                        ['Productos', 'Cantidad' ],
                                            @foreach($products as $product)
                                                ['{{$product->name  }}',{{$product->total_ventas}}],
                                            @endforeach
                                    ]);

                                    var materialOptions = {
                                        width: 900,
                                        chart: {
                                            title: 'Productos Vendidos por Mes',
                                            subtitle: 'Cantidad de Productos '
                                        },
                                        series: {
                                            0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                                            1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                                        },
                                        axes: {
                                            y: {
                                                distance: {label: 'Cantidad'}, // Left y-axis.
                                                brightness: {side: 'right', label: 'apparent magnitude'} // Right y-axis.
                                            }
                                        }
                                    };

                                    var classicOptions = {
                                        width: 900,
                                        series: {
                                            0: {targetAxisIndex: 0},
                                            1: {targetAxisIndex: 1}
                                        },
                                        title: 'Nearby galaxies - distance on the left, brightness on the right',
                                        vAxes: {
                                            // Adds titles to each axis.
                                            0: {title: 'parsecs'},
                                            1: {title: 'apparent magnitude'}
                                        }
                                    };

                                    function drawMaterialChart() {
                                        var materialChart = new google.charts.Bar(chartDiv);
                                        materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
                                        button.innerText = 'Cambiar Vista';
                                        button.onclick = drawClassicChart;
                                    }

                                    function drawClassicChart() {
                                        var classicChart = new google.visualization.ColumnChart(chartDiv);
                                        classicChart.draw(data, classicOptions);
                                        button.innerText = 'Change to Material';
                                        button.onclick = drawMaterialChart;
                                    }

                                    drawMaterialChart();
                                };
                            </script>
                            <button id="change-chart" class="btn btn-info">Cambiar Vista</button>
                            <br><br>
                            <div id="chart_div" style="width: 800px; height: 500px;"></div>
                        </div>

                    </div>
                </div>
            </section>

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
<script src="{{ asset('js/sale.js') }}"></script>
<script src="{{ asset('js/validatorsWH.js') }}"></script>
<script src="{{ asset('validacion.js') }}"></script>


{{--<script type="text/javascript">
    alert(44444);
    $(document).ready(function(){
        $('#bt_add').click(function(){
            agregar()
        });
    });

    var cont=0;
    total=0;
    subtotal=[];
    $("#guardar").hide();
    $("#pidarticulo").change(mostrarValores);

    function mostrarValores(){
        datosArticulo=document.getElementById('pidarticulo').value.split('_');
        $("#psale_price").val(datosArticulo[2]);
        $("#pstock").val(datosArticulo[1]);
    }


</script>--}}
</body>
</html>

{{--dd($saledetail)--}}


