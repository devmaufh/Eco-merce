<?php
include_once('../components/header.php');
?>


<div class="page-header header-filter" data-parallax="true"
    style="background: url('../assets/img/fondo.jpg');background-color: rgba(0, 0, 0, 0.5);">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img id="img1"  class="foto-p d-block w-100" src="https://cdn.pixabay.com/photo/2019/06/10/18/42/plant-4264952_960_720.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img2" class="foto-p d-block w-100" src="https://cdn.pixabay.com/photo/2019/06/10/18/42/plant-4264952_960_720.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img id="img3" class="foto-p d-block w-100" src="https://cdn.pixabay.com/photo/2019/06/10/18/42/plant-4264952_960_720.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
            <div class="col-md-6">
                <h1 id="titulo" class="title">a</h1>
                <p id="d1p"></p>
                <br>
                <h2 class="text-white" id="d2p"><b>$5000</b></h2>
                <h3 class="text-white" id="d3p" hidden><b>$5000</b></h3>
                <a data-toggle="modal" data-target="#signupModal"
                    class="btn btn-success btn-raised btn-lg">
                    <i class="fa fa-plus"></i> Comprar por mayoreo
                </a>
                <a href="" target="_blank"
                    class="btn btn-warning btn-raised btn-lg">
                    <i class="fa fa-plus"></i> Comprar por menudeo
                </a>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center">
        <div class="section text-center">
            <h2 id="te" class="title"></h2>
            <div class="card card-plain">

                <div class="team">
                    <div id="eproductos" class="row">

                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-signup" role="document">
    <div class="modal-content">
      <div class="card card-signup card-plain">
        <div class="modal-header">
          <h5 class="modal-title card-title">Comprar por mayoreo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mr-auto">
              

              <form class="form" method="" action="">
                <div class="card-body">
                <h6>Para que el precio por mayoreo aplique, el proveedor indicó que debes realizar una compra mínima de <b class="text-warning" >500</b> piezas</h6>
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text"></div>
                      </div>
                        <input type="number" class="form-control" placeholder="Cantidad de piezas">
                    </div>
                  </div>

                <div hidden class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"></div>
                    </div>
                      <input type="password" placeholder="Password..." class="form-control" />
                  </div>
                </div>

                <div hidden class="form-check">
                  <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" value="" checked>
                      <span class="form-check-sign">
                          <span class="check"></span>
                      </span>
                      I agree to the <a href="#something">terms and conditions</a>.
                  </label>
                </div>
                </div>
              <div class="modal-footer justify-content-center">
              <a href="#pablo" class="btn btn-success btn-round">Realizar pedido</a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?php
include_once('../components/footer.php');
?>

<script>
var id = <?php echo $_GET['id'];?>
</script>
<script defer src="../js/detail.js"></script>
