$(document).ready(function () {
    $.ajax({
        type: "post",
        url: "../classes/controllers/productosController.php",
        data: {
            action: 'query_one',
            idp: id,
        },
        dataType: "json",
        success: function (response) {
            let status = response.status;
            if (status == true) {
                console.log("Auxilio");
                let data = response.data;
                document.getElementById("titulo").innerHTML = data.nombre;
                document.getElementById("d1p").innerHTML = data.descripcion;
                document.getElementById("img1").src =data.img;
                document.getElementById("img2").src =data.img;
                document.getElementById("img3").src =data.img;
                document.getElementById("d2p").innerHTML = "<b>$"+data.precioMayoreo+"</b>";
                document.getElementById("d3p").innerHTML = "<b>$"+data.precioMenudeo+"</b>";
                

                console.log(data.idProvedor);
                fillCard(data.idProvedor);
            } else console.log("NO");
        }
    });
});

function fillCard(p){
    $.ajax({
        type: "post",
        url: "../classes/controllers/productosController.php",
        data: {
            action:'selectProvedor',
            idP:p
        },
        dataType: "json",
        success: function (response) {
            let data = response.data;
            document.getElementById("te").innerHTML = "Más de <b class='text-success'>"+ data[0].provedor+"</b>";
            data.forEach(product => {
                $('#eproductos').append("<div class='col-md-4'><div class='team-player'><div class='card card-plain'><div class='col-md-6 ml-auto mr-auto'><a href ='../pages/producto_detail.php?id="+product.idProd+"'><img src='"+product.img+"' alt='Thumbnail Image' class='img-raised rounded-circle img-fluid'></a></div><a href ='../pages/producto_detail.php?id="+product.idProd+"'><h4 class='card-title'>"+product.nombre+"  Notifications <span class='badge badge-success'>$"+product.precioMayoreo+"</span><span class='badge badge-warning'>$"+product.precioMenudeo+"</span><br><small class='card-description text-muted'>"+product.provedor+"</small></h4></a><div class='card-body'><p class='card-description'>"+product.descripcion.substring(0,235)+"</p></div></div></div></div>");
            });
        }
    });
}