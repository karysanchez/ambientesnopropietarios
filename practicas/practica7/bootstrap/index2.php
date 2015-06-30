<!DOCTYPE html>
<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
?>


<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DEBER SESION 12</title>
        <script type="text/javascript" src="validacion.js"></script>
        <!-- CSS de Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
    </head>
    <body style="background-color: aquamarine">
    <center><h1> ESCUELA POLITECNICA NACIONAL</h1>
        <h2>ESFOT</h2>
        <h3>AMBIENTES NO PROPIETARIOS</h3>
        <h4>DEBER DE LA SESION 12</h4></center>
    <h5>TEMA: Uso de bootstrap</h5>
    <center><h6>PROGRAMANDO MI DEBER</h6></center></br>

    <!-- MODAL ELIMINAR -->

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                ESTA SEGURO DE QUERER ACCEDER A ELIMINAR LA INFORMACION DE LA BASE DE DATOS???
            </div>
        </div>
    </div></br>
    
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                
            </div>
        </div>
    </div></br>
    
    

    <div class="col-md-6">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <center><img src="epn.jpg" alt="EPN"></center>
                    <div class="carousel-caption"></div>
                </div>

                <div class="item">
                    <center><img src="c1.jpg" alt="IMAG1"></center>
                    <div class="carousel-caption"></div>
                </div>

                <div class="item">
                    <center><img src="c2.jpg" alt="IMAG2"></center>
                    <div class="carousel-caption"></div>
                </div>

                <div class="item">
                    <center><img src="c3.jpg" alt="IMAG3"></center>
                    <div class="carousel-caption"></div>
                </div>

                <div class="item">
                    <center><img src="c4.jpg" alt="IMAG4"></center>
                    <div class="carousel-caption"></div>
                </div>
                <!-- Carrusel -->
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>


    <!-- Haciendo el formulario --> 
    <form action="insertar.php" name ="form" method="post" onsubmit="return validar(this)">
        <br><div><strong>INGRESE LOS RESPECTIVOS DATOS DEL EMPLEADO</strong></div></br>

        <br>
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" value="" id="nombre">
        </div>

        <div>
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" value="" id="apellido">
        </div>

        <div>
            <label for="fechanacimiento">fecha Nacimiento: </label>
            <input type="text" name="fechanacimiento" value="" id="fechanacimiento">
        </div>

        <div>
            <label for="direccion">Direcci&oacute;n: </label>
            <input type="text" name="direccion" value="" id="direccion">
        </div>

        <div>
            <label for="telefono">Telefono: </label>
            <input type="text" name="telefono" value="" id="telefono">
        </div>

        <div>
            <label for="estadocivil">Estado Civil: </label>
            <input type="text" name="estadocivil" value="" id="estadocivil">
        </div>

        <div>
            <label for="departamento">Departamento: </label>
            <input type="text" name="departamento" value="" id="departamento">
        </div>
        </br>

        <br>

        <!-- BOTON INGRESAR --> 
        <input type="button" value ="Ingresar" name="ingresar">

        </br>

        <!-- BOTON ELMINAR PARA APLICAR MODAL --> 
        <div clas="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">ELIMINAR CON MODAL</button>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
        </div>

        <!-- BOTON MODIFICAR PARA APLICAR MODAL --> 
        <div clas="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">MODIFICAR CON MODAL</button>
            <div class="modal fade" id="moda" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div>
        </div>

        
 
        
        
        
    </form>




    <!-- Consulta a nuestra base de datos -->   

    <?php
    $query = 'SELECT*FROM empleado';

    $result = $conn->query($query);
    if (!$result)
        die($conn->error);
    $num_rows = $result->num_rows;
    ?>


    <!-- Haciendo la tabla --> 
    <?php
    echo '<br>';
    echo '<table>';
    echo '<tr>';
    echo '<td>Nombre</td>';
    echo '<td>Apellido</td>';
    echo '<td>Fecha_Nacimiento</td>';
    echo '<td>Direcci&oacute;n</td>';
    echo '<td>Telefono</td>';
    echo '<td>Estado_Civil</td>';
    echo '<td>Departamento</td>';
    echo '</tr>';

    //CONDICION PARA QUE SE ME AÑADA EN LA TABLA     
    for ($j = 0; $j < $num_rows; ++$j) {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo '<tr>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['apellido'] . '</td>';
        echo '<td>' . $row['fechanacimiento'] . '</td>';
        echo '<td>' . $row['direccion'] . '</td>';
        echo '<td>' . $row['telefono'] . '</td>';
        echo '<td>' . $row['estadocivil'] . '</td>';
        echo '<td>' . $row['departamento'] . '</td>';


        echo '<td>
            <form action = "eliminar.php" method = "post" >
            <input type = "button" data-toggle="modal" data-target="#miventana" value = "Eliminar" name = "Eliminar">
            <input type = "hidden" value = "' . $row['id'] . '" name = "id">           
            </form></td>
            <td>

            <form action = "consulta.php" method = "post">
            <input type = "button" value = "Seleccionar" name = "seleccionar">
            <input type = "hidden" value = "' . $row['id'] . '" name = "id">
            </form></td>';

        echo'</tr>';
    }
    echo '</table>';
    echo '</br>';
    $result->close();
    $conn->close();
    ?>


    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <!-- Todos los plugins JavaScript de Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

