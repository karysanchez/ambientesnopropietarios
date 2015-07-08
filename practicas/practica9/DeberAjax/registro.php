<?php

/* CONEXION CON LA BASE DE DATOS */
$conn = new \mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);


if ($_POST) {
    $nom = $_POST['nombre'];
    $email = $_POST['email'];
    $telef = $_POST['telefono'];
    $direc = $_POST['direccion'];
    $usu = $_POST['usuario'];
    $contr = $_POST['contrasena'];
    $verif = $_POST['otracontrasena'];


    if ($nom != '' && $email != '' && $telef != '' && $direc != '' && $usu != '' && $contr != '' && $verif != '') {
        $q_insert = "INSERT INTO registro(nombre, email, telefono,direccion, usuario, contrasena, passadmin)
			VALUES ('$nom', '$email', '$telef', '$direc', '$usu', '$contr', '$verif')";
        $resp = $conn->query($q_insert);
        if (!$resp) {
            echo '<div>Hay un error al insertar'.$conn->error.'</div>';
        } else {
            echo '<div>Dato ingresado correctamente</div>';
            header('Location: index.php');
        }
    } else {
        echo '<div>Ingrese Datos por Favor</div>';
    }
}

?>