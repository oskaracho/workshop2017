{{--{{dump($warehouse)}}--}}
<?php
$cant_to=0;
$total_neto=0;
?>
<html>
<head>
    <style>

    </style>
</head>
<body>

<table cellspacing="0" cellpadding="2" border="0" align="center">
    <tr>

        <td  ><h2>CONTROL DE INVENTARIOS</h2></td>
    </tr>
</table>
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
    </tr>
</table>
<br>
<table cellspacing="0" cellpadding="6" border="2" align="center">
    <thead>

    <tr>
        <th rowspan="2">Fecha</th>
        <th rowspan="2">Codigo</th>
        <th COLSPAN="3">COMPRAS</th>
        <th COLSPAN="3">VENTAS</th>
        <th COLSPAN="3">SALDOS</th>
    </tr>

    <tr>

        <th>CANT</th>
        <th>C/U</th>
        <th>TOTAL</th>
        <th>CANT</th>
        <th>C/U</th>
        <th>TOTAL</th>
        <th>CANT</th>
        <th>C/U</th>
        <th>TOTAL</th>
    </tr>

    </thead>
    <tbody>
    @for ($i=0; $i<count($warehouse);$i++)
        <?php if($warehouse[$i]->status==1) {?>
        <tr>

            <td>{{$warehouse[$i]->created_at}}</td>{{-- fehca --}}
            <td>{{$warehouse[$i]->idarticle}}</td>{{-- codigo --}}
            <td>{{ $warehouse[$i]->stock_start }}</td>{{-- cant_com --}}
            <td>{{ $warehouse[$i]->sale_price }}</td>{{-- costo_com --}}
            <td>{{ $warehouse[$i]->stock_start*$warehouse[$i]->sale_price }}</td>{{-- costo_com --}}
            <td></td>{{-- cant_ven --}}
            <td></td>{{-- costo_ven --}}
            <td></td>{{-- tottal_ven --}}
            <td>{{$warehouse[$i]->stock_start}}</td>{{-- codigo --}}
            <td>{{ $warehouse[$i]->sale_price }}</td>{{-- cant_com --}}
            <td>{{ $warehouse[$i]->stock_start*$warehouse[$i]->sale_price }}</td>{{-- costo_com --}}

        </tr>
        <?php }?>
        <?php if($warehouse[$i]->status==2 ) {?>
        <tr>

            <td>{{$warehouse[$i]->created_at}}</td>{{-- fehca --}}
            <td>{{$warehouse[$i]->idarticle}}</td>{{-- codigo --}}
            <td></td>{{-- cant_ven --}}
            <td></td>{{-- costo_ven --}}
            <td></td>{{-- tottal_ven --}}
            <td>{{ $warehouse[$i]->stock_start }}</td>{{-- cant_com --}}
            <td>{{ $warehouse[$i]->sale_price }}</td>{{-- costo_com --}}
            <td>{{ $warehouse[$i]->stock_start*$warehouse[$i]->sale_price }}</td>{{-- costo_com --}}
            <td>{{$warehouse[$i]->cant_res}}</td>{{-- codigo --}}
            <td>{{ $warehouse[$i]->sale_price }}</td>{{-- cant_com --}}
            <td>{{ $warehouse[$i]->cant_res*$warehouse[$i]->sale_price }}</td>{{-- costo_com --}}
        </tr>
        <?php $cant_to=$cant_to+$warehouse[$i]->stock_start;
        $total_neto=$total_neto+$warehouse[$i]->stock_start*$warehouse[$i]->sale_price;
        }?>


    @endfor
    <tr>

        <td></td>{{-- fehca --}}
        <td></td>{{-- codigo --}}
        <td></td>{{-- cant_ven --}}
        <td></td>{{-- costo_ven --}}
        <td></td>{{-- tottal_ven --}}
        <td>{{$cant_to}}</td>{{-- cant_com --}}
        <td></td>{{-- costo_com --}}
        <td>{{ $total_neto }}</td>{{-- costo_com --}}
        <td></td>{{-- codigo --}}
        <td></td>{{-- cant_com --}}
        <td></td>{{-- costo_com --}}
    </tr>
    </tbody>
</table>
</body>
</html>
