<?php
error_reporting(0);
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);
else
    echo 'Conexion exitosa' . '<br>' . '<br>';

/*Recibir el ide la colecciones*/
if ($_POST) {
    $id = $_POST['id'];

    $query = "SELECT autor,titulo,tipo,anio FROM clasicos WHERE id='$id'";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $res->close();
    $conn->close();
}
?>

<html>
    <head>
        <!-- meta charset: permite en un metaelemento en la parte superior del elemento head y asegúrese de que 
        toda la declaración quepa dentro de los primeros 1024 bytes de la página. --> 
        <meta charset="UTF-8">
        <title>Modificar</title>
    </head>
    <body>
        <form method="POST" action="./modificar.php">
          
            <div>
                <label for="autor"> Autor: </label>
                <input type="text"  name="autor" value="<?php echo $row['autor']; ?>" id="autor"/>
            </div>
            <div>
                <label for="titulo"> T&iacute;tulo: </label>
                <input type="text"  name="titulo" value="<?php echo$row ['titulo']; ?>" id="titulo"/>
            </div>
            <div>
                <label for="tipo"> Tipo: </label>
                <input type="text"  name="tipo" value="<?php echo$row ['tipo']; ?>" id="tipo"/>
            </div>
            <div>
                <label for="anio"> A&ntilde;o </label>
                <input type="text"  name="anio" value="<?php echo$row ['anio']; ?>" id="anio"/>
            </div>
            <div>
                <input type="submit" value="Guardar" name="Guardar" class="modificar" />
            </div>
        </form>
    </body>
</html>

<?php
//Consulta de modificar
$ide = $_POST['id'];
$conni = new mysqli($host, $usuario, $contrasena, $bdd);
if ($ide) {
    $aut = $_POST['autor'];
    $tit = $_POST['titulo'];
    $tip = $_POST['tipo'];
    $anio = $_POST['anio'];
    $q_modificar = "UPDATE clasicos SET autor ='$aut',titulo='$tit',tipo = '$tip',anio ='$anio' WHERE id=$ide";
    $resulta = $conni->query($q_modificar);
    if (!$resulta) {
        echo '<div>Exist&oacute; in error al modificar' . '</div>';
    } else {
        echo '<div>Libro modificado exitosamente' . '</div>';
    }
    echo '<form action="./index.php" >'
    . '<input type="submit" value="Regresar" name="Regresar" class="eliminar"/>'
    . '</form>';
    $conni->close();
}
?>
