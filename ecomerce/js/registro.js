$(document).ready(function () {
    $('#btnUsuario').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "../classes/controllers/proveedorController.php",
            data: {
                action:'insert',
                data:{
                    rfc:$('#rfcu').val(),
                nombre:$('#nombreu').val(),
                direccion:$('#direccionu').val(),
                provincia:$('#provinciau').val(),
                telefono:$('#telefonou').val(),
                email:$('#emailu').val(),
                password:$('#passwordu').val(),
                }
            },
            dataType: "json",
            success: function (response) {
                console.log(response);                
            }
        });
    }); 
    $('#btnProveedor').click(function (e) { 
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "../classes/controllers/proveedorController.php",
            data: {
                action:'insert',
                data:{
                    rfc:$('#rfc').val(),
                nombre:$('#nombre').val(),
                direccion:$('#direccion').val(),
                provincia:$('#provincia').val(),
                telefono:$('#telefono').val(),
                email:$('#email').val(),
                password:$('#password').val(),
                }
            },
            dataType: "json",
            success: function (response) {
                console.log(response);                
            }
        });
    });
});