$(document).ready(function () {
    $.ajax({
        type: "post",
        url: "../classes/controllers/productosController.php",
        data: {
            action:'selectTop',
        },
        dataType: "json",
        success: function (response) {
            let data = response.data;
            data.forEach(product => {
                $('#productosL').append("<div class='col-md-4'><div class='team-player'><div class='card card-plain'><div class='col-md-6 ml-auto mr-auto'><img src='"+product.img+"' alt='Thumbnail Image' class='img-raised rounded-circle img-fluid'></div><h4 class='card-title'>"+product.nombre+"  Notifications <span class='badge badge-success'>$"+product.precioMayoreo+"</span><span class='badge badge-warning'>$"+product.precioMenudeo+"</span><br><small class='card-description text-muted'>"+product.provedor+"</small></h4><div class='card-body'><p class='card-description'>"+product.descripcion.substring(0,235)+"</p></div></div></div></div>");
            });
        }
    });
});