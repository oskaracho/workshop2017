$(document).ready(function() {

    var aa =0;

    $("#btn1").click(function(){

        var sel = $('#pro_id').find(':selected').val();
        datosArticulo=document.getElementById('pro_id').value.split('_');
        idarticulo = datosArticulo[0];
        $("#xd").append("<div id='"+aa+"' class='row'><input  class='form-control  col-sm-4' id='1' name='article[]' value='"+ idarticulo +"' required />" +
            "<input id='"+aa+"'  name='quantity[]' class='form-control col-sm-4' type='number' readonly value='"+$('#pquantity').val()+"'>" +
            "<input id='"+aa+"'  name='stock[]' class='form-control col-sm-4' type='number' readonly value='"+$('#pstock').val()+"'>" +
            "<input id='"+aa+"'  name='sale_price[]' class='form-control col-sm-4' type='number' readonly value='"+$('#psale_price').val()+"'>" +
            "<input id='"+aa+"'  name='discount[]' class='form-control col-sm-4' type='number' readonly value='"+$('#pdiscount').val()+"'>" +
            "<button id='btn2' data-id='"+aa+"' class='form-control col-sm-4'>Eliminar</button></div>")
        aa++;
        /*
         $("x").append("<input id='"+aa+"'  name='feature[]' class='form-control' type='text' readonly value='"+$('#trait').val()+"'>");
         $("y").append("<input id='"+aa+"' name='desc[]' class='form-control' type='text' readonly value='"+$('#desc').val()+"'>");
         $("z").append("<button id='btn2' data-id='"+aa+"' class='form-control'>Eliminar</button>");
         aa++;*/
    });
    $('#xd').on('click','#btn2',function() {
        $(this).parent().remove();
    });

});/**
 * Created by DIEGO ALEJANDRO on 23/11/2017.
 */
