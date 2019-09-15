<?php
include_once('../components/header.php');
?>
<div class="page-header header-filter"
    style="background-image: url('https://cdn.pixabay.com/photo/2016/07/05/16/53/leaf-1498985_960_720.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md- ml-auto     mr-auto">
                <div class="card card-login">
                    <form class="form" method="" action="">
                        <div class="card-header card-header-success text-center">
                            <h4 class="card-title">Iniciar sesión</h4>
                            <div class="social-line">
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-facebook-square"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#pablo" class="btn btn-just-icon btn-link">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <p class="description text-center">De la manera clásica</p>
                        <div class="card-body">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">email</i>
                                    </span>
                                </div>
                                <input id="tfCorreo" type="text" class="form-control" placeholder="Correo o usuario">
                            </div>
                           
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">remove_red_eye</i>
                                    </span>
                                </div>
                                <input id="tfPass" type="password" class="form-control" placeholder="Contraseña...">
                            </div>
                        </div>
                        <div class="footer text-center">
                            <a id="btnLogin" href="#pablo" class="btn btn-success btn-link btn-wd btn-lg">Iniciar sesión</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('../components/footer.php');?>


<script src="../js/login.js"></script>