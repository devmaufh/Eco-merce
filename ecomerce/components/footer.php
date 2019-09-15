
<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-success text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">Log in</h4>
                    <div class="social-line">
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-facebook-square"></i>
                      </a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-twitter"></i>
                      <div class="ripple-container"></div></a>
                      <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                        <i class="fa fa-google-plus"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="modal-body">
                    <form class="form" method="" action="">
                        <p class="description text-center">¿Listo para ser eco-friend?</p>
                        <div class="card-body">
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                  </div>
                                  <input id="email" type="email" class="form-control" placeholder="Email...">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">lock_outline</i></div>
                                  </div>
                                  <input id="password" type="password" placeholder="Contraseña..." class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                    <h6 id="errorM" class="ustify-content-center text-danger" >Error al iniciar sesión</h6>

                </div>
                <div class="modal-footer justify-content-center">
                    <a id="btnLogin" href="#" class="btn btn-sucess btn-link btn-wd btn-lg">Iniciar sesión</a>
                </div>
            </div>
        </div>
    </div>
</div>



<footer class="footer footer-default">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Eco-merce
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              Nosotros
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Educación ambiental
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Términos y condiciones
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Eco-merce</a> for a better world.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
  <script src="">
  $('.alert').alert()
  </script>
  <script src="../js/login.js"></script>
</body>
</html>
