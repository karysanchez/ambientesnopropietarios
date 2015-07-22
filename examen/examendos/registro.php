
<?php

/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $cont, $bdd);

if ($conn->connect_error)
    die($conn->connect_error);


if ($_POST) {
    $nom = $_POST['nombre'];
    $usu = $_POST['usuario'];
    $contr = $_POST['contrasena'];
    $verif = $_POST['otracontrasena'];
    $clave = md5($contr);
    $clavever = md5($verif);


    if ($nom != '' && $usu != '' && $contr != '' && $verif != '') {
        $q_insert = "INSERT INTO usuarios(nombre, usuario, contrasena,otracontrasena)
			VALUES ('$nom', '$usu', '$clave', '$clavever')";
        $resp = $conn->query($q_insert);
        if (!$resp) {
            echo '<div>Hay un error al insertar' . $conn->error . '</div>';
        } else {
            echo '<div>Dato ingresado correctamente</div>';
            header('Location: index.php');
        }
    } else {
        echo '<div>Ingrese Datos por Favor</div>';
    }
}
?>