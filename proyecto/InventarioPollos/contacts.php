<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Contactos</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- startedTemplate CSS -->
        <link href="css/startedTemplate.css" rel="stylesheet">
        <!-- POLL.PNG EN LUGAR DEL SIMBOLO XAMPP -->
        <link rel="shortcut icon" href="img/poll.png">

        <!-- Custom CSS -->
        <link href="css/modern-business.css" rel="stylesheet">



        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Principal</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="whoWeAre.php">Quienes Somos<span class="sr-only">(current)</span><img src="img/somos.gif"></a></li>


                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="contacts.php"><img src="img/cl.gif">Clientes</a></li>
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input type="email" name="usuario" class="form-control" placeholder="xyz@ejemplo.com" required="">
                                <input type="password" name="contrasena" class="form-control" placeholder="contraseña" required="">
                            </div>
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </form>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>



        <!-- Page Content -->
        <div class="container">
            <!-- /.row -->

            <!-- Content Row -->
            <div class="row">

                <!-- AGREGANDO MI UBICACION GOOGLE MAPS -->
                <div class="col-md-8" id="map" style="width: 750px; height: 500px;">
                    <script src="http://maps.google.com/maps/api/js?sensor=false&callback=init"></script>
                    <script type="text/javascript">


                        function init() {
                            var image = new google.maps.MarkerImage(
                                    'http://www.publiblanes.net/Iconos/icono-gente.gif',
                                    new google.maps.Size(49, 50)
                                    );

                            var mapOptions = {
                                center: new google.maps.LatLng(-0.0936649, -78.419794),
                                zoom: 15,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                            };
                            var map = new google.maps.Map(document.getElementById("map"), mapOptions);

                            var place = new google.maps.LatLng(-0.0936649, -78.419794);
                            var marker = new google.maps.Marker({
                                position: place,
                                title: "NEGOCIO SANCHEZ",
                                map: map,
                                icon: image
                            });

                            google.maps.event.addListener(marker, 'click', showInfo);

                        }



                        function showInfo() {
                            map.setZoom(16);
                            map.setCenter(marker.getPosition());
                            var infowindow = new google.maps.InfoWindow({
                                content: "Lugar donde se le <br>ofrece el mejor producto."
                            });
                            infowindow.open(map, marker);
                        }
                    </script>
                </div>



                <!-- Contact Details Column -->
                <div class="col-md-4">
                    <h3>INFORMEACION DEL NEGOCIO</h3>
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
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://es-la.facebook.com/"><img src="img/fa.gif"></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/?lang=es"><img src="img/t.gif"></a>
                        </li>
                        <li>
                            <a href="https://hotmail.com/"><img src="img/hot.gif"></a>
                        </li>
                    </ul>
                </div>
                <!-- /.row -->

                <!-- Contact Form -->
                <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
                <div class="row">
                    <div class="col-md-8">
                        <h3>NOS INTEREZA SUS COMENTARIOS</h3><br>
                        <h3>Ingrese sus sugerencias por favor</h3><br>
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Nombre completo:</label>
                                    <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Teléfono:</label>
                                    <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Correo electrónico:</label>
                                    <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                                </div>
                            </div>
                            <div class="control-group form-group">
                                <div class="controls">
                                    <label>Comentarios o sugerencias:</label>
                                    <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                                </div>
                            </div>
                            <div id="success"></div>
                            <!-- For success/fail messages -->
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>

                </div>
                <!-- /.row -->

                <hr>

                <!-- Footer -->
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Negocio Sánchez</p>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.container -->

            <!-- jQuery -->
            <script src="js/jquery.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="js/bootstrap.min.js"></script>

            <!-- Contact Form JavaScript -->
            <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <script src="js/jqBootstrapValidation.js"></script>
            <script src="js/contact_me.js"></script>

    </body>
</html>