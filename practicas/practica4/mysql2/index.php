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


/* PONIENDO LA CONDICION POST PARA EL INGRESO DE DATOS */
echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_POST) {

    /* Variables */
    $nom = $_POST['nombre'];
    $apell = $_POST['apellido'];
    $nacimiento = $_POST['fechanacimiento'];
    $direcc = $_POST['direccion'];
    $telef = $_POST['telefono'];
    $estado = $_POST['estadocivil'];
    $depart = $_POST['departamento'];

    /* Condicion */
    if ($nom != '' && $apell != '' && $nacimiento != '' && $direcc != '' && $telef !='' && $estado='' && $depart='') {
        $q_insert = "INSERT INTO empleado(nombre,apellido,fechanacimiento,direccion,telefono,estadocivil,departamento)
                  VALUES ('$nom', '$apell', '$nacimiento', '$direcc', '$telef', '$estado', '$depart')";

        $res = $conn->query($q_insert);

        if (!$res) {
            echo '<div>Existi&oacute; un error al insertar.' . $conn->error . '</div>';
        } else {
            echo '<div>Libro insertado correctamente.</div>';
        }
    } else {
        echo '<div>Ingerese todos los campos.</div>';
    }
}






/* CRAGANDO LOS DATOS EN LA TABLA */
$query = 'SELECT*FROM empleado';
$result = $conn->query($query);
if (!$result)
    die($conn->error);
/* filas */
$num_rows = $result->num_rows;
?>



<html>
    <!-- Haciendo el formulario -->   
    <head>
        <title>Base Negocio</title>
    </head>
    <body>
        <form method="post">
            <br><div><strong>INGRESE LOS RESPECTIVOS DATOS</strong></div></br>

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
                <input type="date" name="fechanacimiento" value="" id="fechanacimiento">
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
            <input type="submit" value ="Ingresar" name="ingresar">

            <!-- BOTON MODIFICAR --> 
            <input type="submit" value ="Modificar" name="modificar">

            <!-- BOTON ELIMINAR --> 
            <input type="submit" value ="Eliminar" name="eliminar">

            </br>

        </form>


        <!-- Haciendo la tabla --> 
        <?php
        echo '<br>';
        echo '<table>';
        echo '<tr>';
        echo '<td>Nombre<td>';
        echo '<td>Apellido<td>';
        echo '<td>Fecha_Nacimiento<td>';
        echo '<td>Direcci&oacute;n<td>';
        echo '<td>Telefono<td>';
        echo '<td>Estado_Civil<td>';
        echo '<td>Departamento<td>';
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
            
            echo'</tr>';
        }
        echo '</table>';
        echo '</br>';
        $result->close();
        $conn->close();
        ?>
    </body>
</html>
