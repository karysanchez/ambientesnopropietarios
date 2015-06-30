<?php

/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);

if ($conn->connect_error)
    die($conn->connect_error);
//Estableciendo la funcion para eliminar
if ($_POST) {

    $id = $_POST['id'];
    $q_eliminate = "DELETE FROM empleado WHERE id ='$id'";
    $r = $conn->query($q_eliminate);
    if (!$r) {
        echo '<div>Ocurrio un error</div>';
    } else {
        echo '<div>Informacion eliminada</div>';
    }
}

header('Location: index.php');
?>
