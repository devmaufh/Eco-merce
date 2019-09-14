<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/dataTables.materialize.css"/>
    <link type="text/css" rel="stylesheet" href="../css/default.css"/>
    <link rel="icon" type="image/x-icon" href="../fonts/favicon.ico" />
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col s6 m12">
            <div class="card">
                <div class="card-content">
                <span class="card-title" align="center"><h4><i class="material-icons" ></i></h4></span>
                <form class="container" id="frm" name="frm" method="post">
                
                

                <div class="row" align="center">
                    <div class="input-field col s12">
                    <p>
                        <label>
                            <input id="idTipo" name="idTipo" type="radio" value="u" checked />
                            <span>Usuario</span>
                        </label>
                    
                        <label>
                            <input id="idTipo" name="idTipo" type="radio" value="a"  />
                            <span>Administrador</span>
                        </label>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="usuario" name="usuario" type="text" class="validate">
                        <label for="usuario">Nombre:</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Contraseña:</label>
                    </div>
                </div>

                  <div class = "row">
                    <div class="input-field col m12" align="center">
                    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons right">send</i></a>
                    </div>
                  </div>


                </form>
                </div>
            </div>
        </div>
    </div>    
</div>




<div id="modalEmp" class="modal">
   <div class="modal-content">
      <h4>Detalle del Empleado</h4>
      </br>
      <form id="frm-emp" method="post">
         <div class="row">
            <div class="input-field_col_s12">
               <input type="text" name="nome" id="nome"  class="validate">
               <label class="nomemp">Nombre del Empleado</label>
            </div>

            <div class="input-field_col_s12">
               <input type="text" name="nome" id="nome"  class="validate">
               <label class="nomemp">Teléfono</label>
            </div>
         </div>
      </form>
      </div>
      <div class="modal-footer">
         <a id="guardar" class="modal-action waves-effect weaves-green btn-flat" >Guardar</a>
      </div>
</div>



<script type="text/javascript" src="../js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.materialize.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>     
    <script type="text/javascript" src="./valUsuario.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('select').formSelect();
        });
    </script> 
</body>
</html>