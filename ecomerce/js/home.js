$(document).ready(function () {
    $.ajax({
        type: "post",
        url: "../classes/controllers/productosController.php",
        data: {
            action:'selectTop',
        },
        dataType: "json",
        success: function (response) {
            response.data.array.forEach(element => {
                console.log("-------> " + element);
            });
        }
    });
});