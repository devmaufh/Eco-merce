<?php
include_once('../components/header.php');
?>
<div class="page-header header-filter"
    style="background-image: url('https://cdn.pixabay.com/photo/2017/01/24/03/53/plant-2004483_960_720.jpg'); background-size: cover; background-position: top center;">
    <div class="container">

        <div class="row">
            <div class="col-md-5 card">
                <h6>Proveedor</h6>
                <form class="" action="">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="rfc" id="rfc" type="text" class="form-control" placeholder="RFC">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="direccion" id="direccion" type="text" class="form-control" placeholder="Dirección">
                    </div>
                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="provincia" id="provincia" type="text" class="form-control" placeholder="Provincia">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="telefono" id="telefono" type="number" class="form-control" placeholder="Telefono">
                    </div>
                    
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="email" id="email" type="email" class="form-control"
                            placeholder="Correo electrónico">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="password" id="password" type="password" class="form-control"
                            placeholder="Contraseña">
                    </div>
                    <div class="row">
                        <div class="col-md-s9"></div>
                        <div class="col-md-s3">
                            <button id="btnProveedor" type="submit" class="btn btn-primary btn-round">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-5 card">
                <h6>Usuario</h6>
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="rfc" id="rfcu" type="text" class="form-control" placeholder="RFC">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="nombre" id="nombreu" type="text" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="direccion" id="direccionu" type="text" class="form-control" placeholder="Dirección">
                    </div>
                   
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="telefono" id="telefonou" type="number" class="form-control" placeholder="Telefono">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="cp" id="cp" type="number" class="form-control" placeholder="Código postal">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="email" id="emailu" type="email" class="form-control"
                            placeholder="Correo electrónico">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="material-icons"></i>
                            </span>
                        </div>
                        <input name="password" id="passwordu" type="password" class="form-control"
                            placeholder="Contraseña">
                    </div>
                    <div class="row">
                        <div class="col-md-s9"></div>
                        <div class="col-md-s3">
                            <a id="btnUsuario"  class="btn btn-primary btn-round">Registrar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<?php include_once('../components/footer.php');?>

<script src="../js/registro.js"></script>