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
        <td width="170"><img src="/maxresdefault.jpg" alt=""></td>

        <td width="120"><h2 align="center">LISTA DE ALMACENES</h2></td>
    </tr>
</table>
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td width="500" align="right"><strong>Fecha:</strong> La Paz, {{$dia_fac3}} de {{$meses[$mes_fac3]}} de {{$ano_fac3}} </td>
    </tr>
</table>
<br>
            <table cellspacing="1" cellpadding="5" border="1" align="center">
                <thead>
                <tr>
                    <th>No</th>
                    <th>NOMBRE</th>
                    <th>VOLUMEN</th>
                    <th>SUCURSAL</th>
                    <th>CIUDAD</th>
                    <th>DIRECCION</th>
                </tr>
                </thead>
                <tbody>
                @foreach($warehouse as $warehouses)
                    <?php
                    $city="";
                    if($warehouses->city==1){$city="La Paz";}
                    else if($warehouses->city==2){$city="Cochabamba";}
                    else if($warehouses->city==3){$city="Santa Cruz";}
                    else if($warehouses->city==4){$city="Tarija";}

                    ?>
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{ $warehouses->name }}</td>
                        <td>{{ $warehouses->volumen }}</td>
                        <td>{{ $warehouses->branches }}</td>
                        <td>{{ $city }}</td>
                        <td>{{ $warehouses->address }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
</body>
</html>
