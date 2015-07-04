<?php
$result = "";
print_r($_POST);
if ($_POST) {
    $name = htmlentities($_POST['nombre']);
    $email = htmlentities($_POST['email']);
    $msg = htmlentities($_POST['mensaje']);
    $noticias = htmlentities($_POST['noticias']);

    $conn = new mysqli($host, $usuario, $cont, $bdd);
    if ($conn->connect_error)
        $result = "No se puede establece la conexión con la BDD";
    else {
        echo 'Conexion exitosa' . '<br>' . '<br>';

        if ($nom != '' && $email != '' && $msg != '' && $noticias != '') {

            $q_insert = "INSERT INTO mensajesa(nombre,email,mensaje,noticias)
                  VALUES ('$name', '$email', '$msg', '$noticias')";

            $res = $conn->query($q_insert);

            if (!$res) {
                $result = 'Existi&oacute; un error al insertar.' . $conn->error;
            } else {
                $result = 'Mensaje enviado con &eacute;xito.';
            }
        } else {
            echo '<div>Datos Vacios</div>';
            echo '<div>Inserte Datos</div>';
        }
    }
    $query = 'SELECT * FROM mensajesa';
    $result = $conn->query($query);
    if (!$result)
        die($conn->error);
    $num_rows = $result->num_rows;
    
}
echo json_encode($result);
?>php