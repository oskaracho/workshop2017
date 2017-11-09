$(document).ready(function() {
    $('#mainTable').DataTable({
        ajax: {
            url: '/catalog/dataTable',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'name' },
            { data: 'description' },
        ]
    });

    $('#productTable').DataTable({
        ajax: {
            url: '/product/dataTable',
            dataSrc: ''
        },
        columns: [
            { data: 'id' },
            { data: 'product_name' },
            { data: 'product_description' },
            { data: 'product_date_up' },
            {"defaultContent":"<button type='button' class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i>" +
            "</button>\t<button type='button' class='eliminar btn btn-danger' data-toggle='modal' data-target='#modalEliminar' >" +
            "<i class='fa fa-trash-o'></i></button>"}
        ],

    });

});