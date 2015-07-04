<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>EJERCICIO EN CLASE CON AJAX</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--        EL UTIMO ARCHIVO CSS TIENE PRECEDENCIA-->
<!--        <link rel="stylesheet" type="text/css" href="css/estilos.css">-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body style="background-color: aquamarine">

        <form>
            <div id="mensaje"></div>

            <!--<button type="submit" value="Link" name="link" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Link</button>-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Link</button>
        </form>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <form role="from" method="POST" name="modal" action="accion=setFunction">
                            <center>
                                <div class="form-group">
                                    <label for="nombre">PONGA SU NOMBRE</label>
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" >
                                </div>
                                <div class="form-group">
                                    <label for="email">PONGA SU EMAIL</label>
                                    <input type="text" class="form-control" name="email" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <label for="mensajes">MOSTRANDO MENSAJES</label>
                                    <textarea class="form-control" rows="3" name="mensajes" name="Mensajes"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" name="noticias">
                                            CUADRO DE NOTICIAS
                                        </label>
                                    </div>
                                </div>
                            </center>
                            <input type="submit"  name="guardar"class="btn btn-primary" value="Guardar"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="close" class="btn btn-default" data-dismiss="modal">SERRAR</button>
                <input type="submit" id="save" name="guardar"class="btn btn-primary"></button>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript" src="js/jquery.validate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    </body>
</html>
