<?php
$fechaqr = explode(" ",date("Y-m-d"));
$separa4 = explode("-",$fechaqr[0],4);
$ano_fac3 = $separa4[0];
$mes_fac3 = $separa4[1];
$dia_fac3 = $separa4[2];
$separa5 = $dia_fac3.'/'.$mes_fac3.'/'.$ano_fac3;
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

        <td width="100"><h2 align="center">CONTROL DE INVENTARIOS</h2></td>
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
        <th>Fecha</th>
        <th>Codigo</th>
        <th COLSPAN="3">COMPRAS</th>
        <th COLSPAN="3">VENTAS</th>
        <th COLSPAN="3">SALDOS</th>
    </tr>
    <tr></tr>
    <tr></tr>
    <tr></tr>
    <tr>
        <th></th>
        <th></th>
        <th>CANTIDAD</th>
        <th>COSTO U</th>
        <th>TOTAL</th>
        <th>CANTIDAD</th>
        <th>COSTO U</th>
        <th>TOTAL</th>
        <th>CANTIDAD</th>
        <th>COSTO U</th>
        <th>TOTAL</th>
    </tr>

    </thead>
    <tbody>
    @for ($i=0; $i<count($warehouse);$i++)

        <tr>
            <td>{{$separa5}}</td>
            <td>{{$warehouse[$i]['code']}}</td>
            <td>{{ $warehouse[$i]['stock'] }}</td>
            <td>{{ $warehouse[$i]['sale_price'] }}</td>
            <td>{{ $warehouse[$i]['price'] }}</td>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $warehouse[$i]['stock'] }}</td>
            <td>{{ $warehouse[$i]['sale_price'] }}</td>
            <td>{{ $warehouse[$i]['price'] }}</td>

        </tr>
    @endfor
    </tbody>
</table>
</body>
</html>
