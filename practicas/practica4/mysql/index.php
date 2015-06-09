<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$conn = new mysqli($host, $usuario, $contrasena, $bdd);
if ($conn->connect_error)
    die($conn->connect_error);

echo '<pre>';
print_r($_POST);
echo '</pre>';

if ($_POST) {
    $aut = $_POST['autor'];
    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $anio = $_POST['anio'];

    if ($aut != '' && $titulo != '' && $tipo != '' && $anio != '') {
        $q_insert = "INSERT INTO clasicos(autor,titulo,tipo,anio)
                  VALUES ('$aut', '$titulo', '$tipo', '$anio')";

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

/* CRAGANDO LOS DATOS */
$query = 'SELECT*FROM clasicos';
$result = $conn->query($query);
if (!$result)
    die($conn->error);
/* filas */
$num_rows = $result->num_rows;

//iterando por cada consulta que nos devuelve la fila, imprimo solo array
//fetch_array recibe solo tres parametros
//MYSQLI_ASSOC sabemos que campo vamos a recuperar el orden este es mejor de usar
//MYSQLI_NUM nos devuelve un arreglo con los indices enteros
//para implementar los dos es MYSQLI_BOTH
//for ($j = 0; $j < $num_rows; ++$j) {
// $result->data_seek($j);
//  $row = $result->fetch_array(MYSQLI_ASSOC);
//si comentamos las tres lineas ya no nos muestra el array y tenemos mejor presentacion, pues estas
//son solo para depurar ver en que estamos trabajando
//echo '<pre>';
//print_r($row);
//echo '</pre>';
//imprimir arreglo imprimir informacion de la tabla con formato
//echo 'Autor: ' . $row['autor'] . '<br>';
//echo 'Titulo: ' . $row['titulo'] . '<br>';
//echo 'Tipo: ' . $row['tipo'] . '<br>';
//echo 'A & ntilde;
//   o: ' . $row['anio'] . '<br>' . '<br>';
//}
?>



<html>
    <!-- Haciendo el formulario -->   
    <head>
        <title>Libros</title>
    </head>
    <body>
        <form method="post">
            <div><strong>Ingresar nuevo libro</strong></div>

            <div>
                <label for="autor">Autor: </label>
                <input type="text" name="autor" value="" id="autor">
            </div>

            <div>
                <label for="titulo">T&iacute;tulo: </label>
                <input type="text" name="titulo" value="" id="titulo">
            </div>

            <div>
                <label for="tipo">Tipo: </label>
                <input type="text" name="tipo" value="" id="tipo">
            </div>

            <div>
                <label for="anio">A&ntilde;o: </label>
                <input type="text" name="anio" value="" id="anio">
            </div>

            <div>
                <input type="submit" value ="Ingresar" name="ingresar">
            </div>


        </form>

    </body>
</html>



<?php
//PARA INSERTAR LA TABLA FUERA DEL FOR
echo '<table>'; //abriendo la tabla
echo '<tr>';
//para columnas
echo '<th>Autor</th>';
echo '<th>Titulo</th>';
echo '<th>Tipo</th>';
echo '<th > A&ntilde;o</th>';
echo '</tr>';
//condicion para se valla añadiendo en la tabla
for ($j = 0; $j < $num_rows; ++$j) {
    $result->data_seek($j);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    echo '<tr>';
    echo '<td>' . $row['autor'] . '</td>';
    echo '<td>' . $row['titulo'] . '</td>';
    echo '<td>' . $row['tipo'] . '</td>';
    echo '<td>' . $row['anio'] . '</td>';
    echo '<td>'
    . '<form action="./modificar.php" method="POST">'
    . '<input type="hidden" value="' . $row['id'] . '"  name="id"/>'
    . '<input type="submit" value="Modificar" name="modificar" class="modificar"/>'
    . '</form> </td>';
    echo '<td>'
    . '<form  method="POST" action="./index.php">'
    . '<input type="hidden" value="' . $row['id'] . '"  name="id"/>'
    . '<input type="submit" value="Eliminar" name="Eliminar" class="eliminar"/>'
    . '</form> </td>'; //elementos hide html
    echo'</tr>';
}
echo '</table>';
$result->close();
$conn->close();
?>

<?php


/*CONSULTANDO PARA EL BOTON MODIFICAR*/
$conni = new mysqli($host, $usuario, $contrasena, $bdd);
if ($_POST) {
    $id = $_POST['id'];
    $q_eliminar = "DELETE FROM clasicos WHERE id=$id";
    $resu = $conni->query($q_eliminar);
    if (!$resu) {
        echo '<div>Exist&oacute; in error al eliminar' . '</div>';
    } else {
        echo '<div>Libro borrado exitosamente' . '</div>';
    }
}
$conni->close();
?>


