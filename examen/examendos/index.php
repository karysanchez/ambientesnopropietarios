<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->

<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $cont, $bdd);

if ($conn->connect_error)
    die($conn->connect_error);
?>


<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!-- Bootstrap -->
        <script language="javascript" src="js/validacion.js"></script>
        <link href="css/bootstrap2.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">


        <title>EXAMEN SEGUNDO BIMESTRE</title>


    </head>

    <body style="background-color: aquamarine">

        <div class="container">

            <form method="post" class="form-signin" action="">
                <div id="mensaje"></div>
                <h2 class="form-signin-heading">Please sign in</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
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
                                            <input type="text" class="form-control"  name="nombre" id="nombre" placeholder="Nombre" >
                                            <div id="errorN" class="error">Error ingrese un nombre</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="usuario">PONGA SU USUARIO</label>
                                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" >
                                            <div id="errorUs" class="error">Error ingrese un Usuario</div>
                                        </div>

                                        <div class="form-group">
                                            <label for="contrasena">PONGA SU CONRASEÑA</label>
                                            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contrasena" >
                                            <div id="errorC1" class="error">Error ingrese una contraseña numeros y letras</div>
                                        </div>


                                        <div class="form-group">
                                            <label for="otracontrasena">PONGA SU OTRA VEZ SU CONTRASEÑA</label>
                                            <input type="password" class="form-control"  name="otracontrasena" id="otracontrasena" placeholder="Otracontrasena" >
                                            <div id="errorC2" class="error">Error ingrese de nuevo la contraseña</div>
                                        </div>



                                    </center>
                                    <input  type="submit" name="submit" class="btn btn-danger" value="crearusuario"/>
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

        </div> <!-- /container -->




        <?php
        $query = 'SELECT*FROM usuarios';

        $result = $conn->query($query);
        if (!$result)
            die($conn->error);
        $num_rows = $result->num_rows;
        ?>






        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="./Signin Template for Bootstrap_files/ie10-viewport-bug-workaround.js"></script>

        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>