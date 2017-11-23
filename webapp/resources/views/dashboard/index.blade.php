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
                                xAxis: {categories:[ '2002','2004','2015']},
                                yAxis: {title:'Porcentaje %',plotlines:[{value:0,width:1,color:'#808080'}]},
                                tooltip:{valueSuffix:'%'},
                                legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
                                series: [{type:'column',name: 'Java',data:[25,23,21]},
                                    {type:'column',name: 'Java',data:[20,18,19]},
                                    {type:'column',name: 'ale',data:[15,17,11]},
                                    {type:'column',name: 'Diego',data:[0,4,4]}]
                            });
                        });
                    </script>
                </div>

            </div>
        </div>
    </section>
@endsection