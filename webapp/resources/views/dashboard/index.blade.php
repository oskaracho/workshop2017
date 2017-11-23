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
                                                        <div class="col-md-6 col-md-pull-9">
                                                            {{--{{dd($ingresos)}};--}}
                                                            <h3>LIMITE DE ACEPTABILIDAD</h3>
                                                            <div class="box-placeholder" >
                                                                <div id="kpi"></div>
                                                                <script>
                                                                    $(function ($) {
                                                                        $('#kpi').highcharts({
                                                                            chart: {
                                                                                plotBackgroundColor: null,
                                                                                plotBorderWidth: 0,
                                                                                plotShadow: false
                                                                            },
                                                                            title: {
                                                                                text: 'Bueno<br>Intermedio<br>Bajo',
                                                                                align: 'center',
                                                                                verticalAlign: 'middle',
                                                                                y: 40
                                                                            },
                                                                            tooltip: {
                                                                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                                                                            },
                                                                            plotOptions: {
                                                                                pie: {
                                                                                    dataLabels: {
                                                                                        enabled: true,
                                                                                        distance: -50,
                                                                                        style: {
                                                                                            fontWeight: 'bold',
                                                                                            color: 'white'
                                                                                        }
                                                                                    },
                                                                                    startAngle: -90,
                                                                                    endAngle: 90,
                                                                                    center: ['50%', '75%']
                                                                                }
                                                                            },
                                                                            series: [{
                                                                                type: 'pie',
                                                                                name: 'Browser share',
                                                                                innerSize: '50%',
                                                                                data: [
                                                                                    ['Pesimo',   10.38],
                                                                                    ['Malo',       20.33],
                                                                                    ['Regular', 24.03],
                                                                                    ['Aceptable',    20.77],
                                                                                    ['Optimo',     10.91],
                                                                                    {
                                                                                        name: 'Proprietary or Undetectable',
                                                                                        y: 0.2,
                                                                                        dataLabels: {
                                                                                            enabled: false
                                                                                        }
                                                                                    }
                                                                                ]
                                                                            }]
                                                                        });
                                                                    });

                                                                </script>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-md-push-3">
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
                    <div id="grafica"></div>
                    <script>
                        $(function ($) {
                            $('#grafica').highcharts({

                                title: {text: 'Grafica de Ventas '},
                                xAxis: {categories:[ '2017  ','2004','2015']},
                                yAxis: {title:'Porcentaje %',plotlines:[{value:0,width:1,color:'#808080'}]},
                                tooltip:{valueSuffix:'%'},
                                legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
                                series: [{type:'column',name: 'Enero',data:[23]},
                                    {type:'column',name: 'Febrero',data:[20]},
                                    {type:'column',name: 'Marzo',data:[15]},
                                    {type:'column',name: 'Abril',data:[8]},
                                    {type:'column',name: 'Mayo',data:[12]},
                                    {type:'column',name: 'Junio',data:[30]},
                                    {type:'column',name: 'Julio',data:[15]},
                                    {type:'column',name: 'Agosto',data:[2]},
                                    {type:'column',name: 'Septiembre',data:[4]},
                                    {type:'column',name: 'Octubre',data:[10]},
                                    {type:'column',name: 'Noviembre',data:[8]},
                                    {type:'column',name: 'Diciembre',data:[26]}]
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </section>
@endsection