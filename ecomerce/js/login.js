$(document).ready(function () {
    $('#errorM').hide();

    $('#btnLogin').on('click', function () {
        $.ajax({
            type: "post",
            url: "../classes/controllers/usuariosController.php",
            data: {
                action: 'login',
                username: $('#email').val(),
                password:$('#password').val(),
            },
            dataType: "json",
            success: function (response) {
                if(response.status ==true){
                    console.log('si');
                }else{
                    $('#errorM').show();
                }
            }
        });
    });

});