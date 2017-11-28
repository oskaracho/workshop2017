{{--{{dump($warehouse)}}--}}
<?php
$fechaqr = explode(" ",$warehouse[0]->created_at);
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
        <td width="180"><img src="/maxresdefault.jpg" alt=""></td>
        <td width="180"><h1 >FACTURA</h1></td>
        <td width="200"><strong>NIT: </strong> 123222113 <br /><strong>N° FACTURA:</strong>  {{$warehouse[0]->voucher_num}}<br /> <strong>N° AUTORIZACION: </strong> 23433333 <br><b>ORIGINAL</b></td>
    </tr>

</table>
<table cellspacing="0" cellpadding="1" border="0">
    <tr>

        <td width="350"><strong>Lugar y fecha:</strong> La Paz, {{$dia_fac3}} de {{$meses[$mes_fac3]}} de {{$ano_fac3}} </td>
        <td width="100"><div align="left"><strong>NIT/CI:</strong> {{$warehouse[0]->document_num}}</div></td>
    </tr>
    <tr>
        <td colspan="6"><strong>Señor(es):</strong> {{$warehouse[0]->name}}</td>
    </tr>

</table>
<table cellspacing="0" cellpadding="5" border="1">
    <tr style="background-color:#000000; color:#ffffff;">
        <td align="center" width="250"><b>DESCRIPCION</b></td>
        <td align="center" width="40"><b>PRECIO (BS)</b></td>
        <td align="center" width="40"><b>CANTIDAD</b></td>
        <td align="center" width="40"><b>DESCUENTO(BS)</b></td>
        <td align="center" width="40"><b>MONTO (BS)</b></td>
    </tr>
    @for ($i=0; $i<count($warehouse);$i++)
    <tr border="0" >
        <td > {{$warehouse[$i]->na_Pro}}</td>
        <td align="right"> {{$warehouse[$i]->sale_price}}</td>
        <td align="right"> {{$warehouse[$i]->quantity}}</td>
        <td align="right"> {{$warehouse[$i]->discount}}</td>
        <td align="right"> {{$Total1=($warehouse[$i]->sale_price*$warehouse[$i]->quantity)-$warehouse[$i]->discount}}</td>
        <?php $Total=$Total+$Total1; ?>
    </tr>
    @endfor
    <tr>
        <td colspan="3">Son:{{$letras = NumeroALetras::convertir($Total)}} /100 Bolivianos.</td>
        <td width="20" align="center" style="background-color:#000000; color:#ffffff;"><b>TOTAL (BS)</b></td>
        <td width="20">{{$Total}}</td>
    </tr>

</table>
<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td>Código de Control: </td>
    </tr>
    <tr>
        <td >Fecha Límite de Emisión: </td>
    </tr>
    <br>
    <br>
    <tr align="center" style="font-size:small">
        <td><strong>“ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAIS. EL USO ILICITO DE ESTA SERA SANCIONADO DE ACUERDO A LEY”</strong></td>
    </tr>
    <tr>
        <td align="center" style="font-size:smaller">Ley N°453: “El proveedor debe brindar atención sin discriminación, con respeto, calidez y cordialidad a los usuarios y consumidores” </td>
    </tr>
</table>
<div class="visible-print text-center">
    {{--{!! QrCode::size(250)->color(150,90,10)->backgroundColor(10,14,244)->generate('Make me a QrCode!'); !!}--}}
    <p>Scan me to return to the original page.</p>
</div>
</body>
</html>

