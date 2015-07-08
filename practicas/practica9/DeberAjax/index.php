<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new \mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
?>




<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Bootstrap -->
        <script language="javascript" src="js/validacion.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">

        <!--        EL UTIMO ARCHIVO CSS TIENE PRECEDENCIA-->
        <!--        <link rel="stylesheet" type="text/css" href="css/estilos.css">-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <title>DEBER CON AJAX</title>

    </head>
    <body style="background-color: aquamarine">

        <form method="post" action="">

            <center><h1> ESCUELA POLITECNICA NACIONAL</h1>
                <h2>ESFOT</h2>
                <h3>AMBIENTES NO PROPIETARIOS</h3>
                <h4>DEBER DE LA SESION 13</h4></center>
            <h5>TEMA: Uso de AJAX</h5>
            <center><h6>HACIENDO MI PAGINA REGISTRO USUARIO</h6></center>

            <div id="mensaje"></div>

            <!--<button type="submit" value="Link" name="link" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Link</button>-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Rgistrar usuario</button>
        </form>

        <form  id="myForm" action="registro.php" method="post" onsubmit=" return validacion();">
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <form role="from" method="POST" name="modal" action="accion=setFunction">
                                <center>
                                    <div class="form-group">
                                        <label for="nombre">PONGA SU NOMBRE</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Nombre" >
                                        <div id="errorN" class="error">Error ingrese un nombre</div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">PONGA SU EMAIL</label>
                                        <input type="text" class="form-control" id="email" placeholder="Email" >
                                        <div id="errorE" class="error">Error ingrese un email</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="telefono">PONGA SU TELEFONO</label>
                                        <input type="text" class="form-control" id="telefono"  placeholder="Telefono" max=1 min=9 step=7 maxlength=10>
                                        <div id="errorT" class="error">Error ingrese un telefono</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="direccion">PONGA SU DIRECCION</label>
                                        <input type="text" class="form-control" id="direccion" placeholder="Direccion" >
                                        <div id="errorD" class="error">Error ingrese una direccion</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="usuario">PONGA SU USUARIO</label>
                                        <input type="text" class="form-control" id="usuario" placeholder="Usuario" >
                                        <div id="errorUs" class="error">Error ingrese un Usuario</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="contrasena">PONGA SU CONRASEÑA</label>
                                        <input type="password" class="form-control" id="contrasena" placeholder="Contrasena" >
                                        <div id="errorC1" class="error">Error ingrese una contraseña numeros y letras</div>
                                    </div>


                                    <div class="form-group">
                                        <label for="otracontrasena">PONGA SU OTRA VEZ SU CONTRASEÑA</label>
                                        <input type="password" class="form-control"  id="otracontrasena" placeholder="Otracontrasena" >
                                        <div id="errorC2" class="error">Error ingrese de nuevo la contraseña</div>
                                    </div>


                                </center>
                                <input type="submit"  name="submit" class="btn btn-danger" value="guardar"/>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="close" class="btn btn-default" data-dismiss="modal">SERRAR</button>
                    <input type="submit" id="save" name="guardar" class="btn btn-primary">
                </div>
            </div>
        </form>



        <?php
        $query = 'SELECT*FROM registro';

        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
        $num_rows = $result->num_rows;
        ?>





        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
