<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
?>


<html>
    <!-- Haciendo el formulario -->   
    <head>
        <title>Base Negocio</title>
        <script type="text/javascript" src="validacion.js"></script>
    </head>
    <body>
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
            <input type="submit"  value ="Ingresar" name="ingresar">



            </br>

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
            <input type = "submit" value = "Eliminar" name = "Eliminar">
            <input type = "hidden" value = "' . $row['id'] . '" name = "id">
            </form></td>
            <td>

            <form action = "consulta.php" method = "post">
            <input type = "submit" value = "Seleccionar" name = "seleccionar">
            <input type = "hidden" value = "' . $row['id'] . '" name = "id">
            </form></td>';

            echo'</tr>';
        }
        echo '</table>';
        echo '</br>';
        $result->close();
        $conn->close();
        ?>
    </body>
</html>
