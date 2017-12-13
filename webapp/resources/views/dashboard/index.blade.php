@extends('layouts.app')

@section('menu_report', 'open active')
@section('title', 'Mando de de Control')
@section('title-description', 'Gestion  ')

@section('content')


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

                                                        <div class="col-md-6 col-md-push-9">
                                                            <h3>TOTAL VENTAS</h3>

                                                            <div class="box-placeholder"><h1>{{ $sales}}</h1></div>
                                                        </div>
                                                        <div class="col-md-2 col-md-pull-9">
                                                            {{--{{dd($ingresos)}};--}}
                                                            <h3>TOTAL INGRESOS </h3>
                                                            <div class="box-placeholder">
                                                                <h1>
                                                                    @foreach($ingresos as $in)
                                                                        {{ $in->total_sales}}
                                                                    @endforeach

                                                                </h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                    <div >
                        <html>
                        <head>
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
                                        title: 'Reporte Mensual'
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                    chart.draw(data, options);
                                }
                            </script>
                        </head>
                        <body>
                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                        </body>
                        </html>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection