<?php
$fechaqr = explode(" ",date("Y-m-d"));
$separa4 = explode("-",$fechaqr[0],4);
$ano_fac3 = $separa4[0];
$mes_fac3 = $separa4[1];
$dia_fac3 = $separa4[2];
$meses = array ("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiempre","Octubre","Noviembre","Diciembre");
$Total=0;
?>
<html>
<head>
    <style>

    </style>
</head>
<body>

<table cellspacing="0" cellpadding="2" border="0">
    <tr>
        <td width="120"><img src="/maxresdefault.jpg" alt=""></td>

        <td width="100"><h2 align="center">LISTA DE PRODUCTOS POR ALMANCEN</h2><br><h2 align="center">" {{$warehouse[0]['name_ware']}} "</h2></td>
    </tr>
</table>
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="500" align="right"><strong>Fecha:</strong> La Paz, {{$dia_fac3}} de {{$meses[$mes_fac3]}} de {{$ano_fac3}} </td>
    </tr>
</table>
<br>
<table cellspacing="0" cellpadding="6" border="2" align="center">
    <thead>
    <tr>
        <th>No</th>
        <th>CODE</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th>FECHA ENTRADA</th>
        <th>STOCK</th>
    </tr>
    </thead>
    <tbody>
    @for ($i=0; $i<count($warehouse);$i++)

        <tr>
            <td>{{$i+1}}</td>
            <td>{{ $warehouse[$i]['code'] }}</td>
            <td>{{ $warehouse[$i]['name'] }}</td>
            <td>{{ $warehouse[$i]['description'] }}</td>
            <td>{{ $warehouse[$i]['product_date_up'] }}</td>
            <td>{{ $warehouse[$i]['stock'] }}</td>

        </tr>
    @endfor
    </tbody>
</table>
</body>
</html>
