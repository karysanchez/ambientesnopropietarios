
<?php
/* CONEXION CON LA BASE DE DATOS */
$conn = new \mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);

session_start();
?>
