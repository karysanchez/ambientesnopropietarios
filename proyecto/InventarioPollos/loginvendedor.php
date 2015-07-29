<!DOCTYPE html>
<!-- saved from url=(0050)http://getbootstrap.com/2.3.2/examples/signin.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>LOGIN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: #f5f5f5;
            }

            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 0 auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }

        </style>
        <link href="css/bootstrap-responsive2.css" rel="stylesheet">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->


    </head>

    <body>

        <div class="container">

            <form class="form-signin" method="post" action="">
                <h2 class="form-signin-heading">VENDEDOR</h2>
                <input type="text" class="input-block-level" placeholder="CI">
                <input type="password" class="input-block-level" placeholder="Password">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Olvide mi contraseña</button><br>
                <button class="btn btn-large btn-primary" type="submit">Sign in</button>
            </form>

            <form  id="myForm" action="registro.php" method="post" onsubmit=" return validacion();">
                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <form role="from" method="POST" name="modal" action="accion=setFunction">
                                    <center>
                                        <div class="form-group">

                                            <h3>CONSULTE CON EL ADMINISTRADOR</h3>
                                            <p>
                                                Ubicado al norte de Quito - Sector "Calderon"<br>Telefonos<br>
                                            </p>
                                            <p><img src="img/tel.PNG"> 
                                                <abbr title="Telefono"></abbr>: (02) 2636-449 o 0983850167</p>
                                            <p><img src="img/corr.gif"> 
                                                <abbr title="CorreoElectronico"></abbr>: <a href="mailto:karoty_25@hotmail.com">karoty_25@hotmail.com</a>
                                            </p>
                                            <p><img src="img/atencion.gif"> 
                                                <abbr title="Hours"></abbr>: Domingo - Viernes: 8:00 AM a 6:00 PM</p>


                                        </div>



                                        <div class="navbar navbar-default navbar-fixed-bottom">
                                            <!-- Contact Details Column -->
                                            <p class="navbar-text pull-left"><img src="img/poll.png" style="height: 20px;"> 
                                                <abbr title="CorreoElectronico"></abbr>: <a href="http://localhost:8080/InventarioPollos/index.php">negocio_sanchez</a>
                                            </p>
                                            <p>
                                            <ul class="list-unstyled list-inline list-social-icons pull-right">
                                                <li>
                                                    <a href="https://es-la.facebook.com/"><img src="img/fa.gif"></a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/?lang=es"><img src="img/t.gif"></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.hotmail.com/"><img src="img/hot.gif"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </center>
                                    <input  type="submit" name="submit" id="btn" class="btn btn-danger" value="crearusuario"/>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="close" class="btn btn-default" data-dismiss="modal">CERRAR</button>

                    </div>
                </div>
            </form>

        </div> <!-- /container -->
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/transition.js"></script>
    <script src="js/alert.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/dropdown.js"></script>
    <script src="js/scrollspy.js"></script>
    <script src="js/tab.js"></script>
    <script src="js/tooltip.js"></script>
    <script src="js/popover.js"></script>
    <script src="js/button.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/carousel.js"></script>



</body></html>