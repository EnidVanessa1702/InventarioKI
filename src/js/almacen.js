   //conteo 1
$(document).ready(function () {
    $('#dataTableAlmacen').DataTable(
        {
            "order": [[0, "desc"]],
            "dom": '<"dt-buttons"Bf><"clear">lirtp',
            "paging": true,
            "autoWidth": true,
            "buttons": [
                //'copyHtml5',
                'csvHtml5',
                'excelHtml5',
                'print'
            ]
        }
    );
});

     //conteo 2
$(document).ready(function () {
    $('#dataTableStockAlmacen').DataTable(
        {
            "order": [[0, "desc"]],
            "dom": '<"dt-buttons"Bf><"clear">lirtp',
            "paging": true,
            "autoWidth": true,
            "buttons": [
               // 'copyHtml5',
                'csvHtml5',
                'excelHtml5',
                'print'
            ]
        }
    );
});

//conteo 1
function actualizarStock(id, modelo, serie, ubicacion, almace, cantidad) {
    $('#idAlmacen').val(id);
    $('#equipo').val(modelo);
    $('#serieProd').val(serie);
    $('#ubicacion').val(ubicacion);
    $('#almace').val(almace);
    $('#cantidad').val(cantidad);
}

//conteo 2
function actualizar2(id, modelo, serie, ubicacion, almace, cantidad) {
    $('#idAlmacen').val(id);
    $('#equipo').val(modelo);
    $('#serieProd').val(serie);
    $('#ubicacion').val(ubicacion);
    $('#almace').val(almace);
    $('#cantidad').val(cantidad);
}

//ACTUALIZAR CONTEO1 
$(document).ready(function () {
    $('#btnActualizarStock').click(function () {
        datos = $('#frmActualizarStock').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "../procesos/consultaActualizar.php",
                success: function (r) {
                    console.log(r);
                    var jsonData = JSON.parse(r);
                    if(jsonData.result == "ok") 
                    {
                        alertify.success(jsonData.mensaje);
                        setTimeout(function () { location.reload(); }, 2000);
                    }
                    else {
                        alertify.error(jsonData.mensaje);
                        //setTimeout(function () { location.reload(); }, 2000);
                    }
                }
            });
        
    });
});

//ACTUALIZAR CONTEO 2
$(document).ready(function () {
    $('#btnActualizar2').click(function () {
        datos = $('#frmActualizar2').serialize();
            $.ajax({
                type: "POST",
                data: datos,
                url: "../procesos/consultaActualizar2.php",
                success: function (r) {
                    console.log(r);
                    var jsonData = JSON.parse(r);
                    if(jsonData.result == "ok") 
                    {
                        alertify.success(jsonData.mensaje);
                        setTimeout(function () { location.reload(); }, 2000);
                    }
                    else {
                        alertify.error(jsonData.mensaje);
                        //setTimeout(function () { location.reload(); }, 2000);
                    }
                }
            });
        
    });
});