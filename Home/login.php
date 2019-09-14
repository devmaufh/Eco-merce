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
        <div class="col s12 m12">
            <div class="card">
                <div class="card-content">
                <span class="card-title" align="center"><h4>LOGIN</h4></span>
                <form class="container" id="frm" name="frm" method="post">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" name="password" type="password" class="validate">
                        <label for="password">Contraseña:</label>
                    </div>
                </div>
               
                <div class="row">
                    <div class="input-field col s12">
                        <input id="correo" name="correo" type="email" class="validate">
                        <label for="correo">Correo electronico:</label>
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