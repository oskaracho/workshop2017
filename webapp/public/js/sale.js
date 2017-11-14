

$(document).ready(function(){
    $('#bt_add').click(function(){
        agregar();
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
function agregar()
{
    datosArticulo=document.getElementById('pidarticulo').value.split('_');
    idarticulo = datosArticulo[0];
    article = $("#pidarticulo option:selected").text();
    quantity = $("#pquantity").val();
    discount = $("#pdiscount").val();
    sale_price = $("#psale_price").val();
    stock= $("#pstock").val();
    if(id != "" && quantity != "" && quantity > 0  && discount != "" && sale_price!= "") {
        if (stock >= quantity) {
            subtotal[cont] = (quantity * sale_price - discount);
            total = total + subtotal[cont];
            var fila = '<tr class="selected" id="fila' + cont + '"><td><button type="button" class="btn btn-warning" onclick="eliminar(' + cont + ');">X</button> </td><td><input type="hidden" name="idarticulo[]" value="' + idarticulo + '">' + article + '</td><td><input type="number" name="quantity[]" value="' + quantity + '"></td><td><input type="number" name="sale_price[]" value="' + sale_price + '"></td><td><input type="number" name="discount[]" value="' + discount + '"></td><td>' + subtotal[cont] + '<td></tr>';
            cont++;
            limpiar();
            $("#total").html("$ " + total);
            $("#sale_total").val(total);
            evaluar();
            $('#detalles').append(fila);

        }

        else {
            alert('La cantidad s vender suspera el Stock')
        }
    }
    else{
        alert("Error al ingresar el detalle de la venta , revise los datos del articulo");

    }

}
function limpiar() {
    $("#pquantity").val("");
    $("#pdiscount").val("");
    $("#psale_price").val("");
}
function evaluar() {
    if(total>0){
        $("#guardar").show();
    }
    else{
        $("#guardar").hide();
    }
}
/*function eliminar(index) {
    total=total-subtotal[index];
    $("#total").html("$ " + total);
    $("#sale_total").val(total);
    $("#fila" + index ).remove();
    evaluar();
*/
}