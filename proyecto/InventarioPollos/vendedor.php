<?php //
include('../php/conexion.php');
if (isset($_SESSION['ciUsuario']) == false or isset($_SESSION['codPerfil']) == false) {
    header('Location: login.php');
} else {
    if ($_SESSION['codPerfil'] == '1') {
        header('Location: administrador.php');
    } else {
        $nombre = mysql_query("SELECT * FROM usuario WHERE ciUsuario = '" . $_SESSION['ciUsuario'] . "'");
        $nombre2 = mysql_fetch_array($nombre);
    }
}
?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
--><html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login por Areas</title>

        <link href="../css/estilo.css" rel="stylesheet">
            <script src="js/jquery_1.js"></script>
            <script src="js/myjava.js"></script>
    </head>
    <body>
        <img id="fondo" src="../recursos/ventas_fondo.jpg"/>
        <header>
            <table align="left" border="0" height="100%" width="100%">
                <tr>
                    <td><b>AREA DE VENTAS</b></td>
                    <td width="300" align="left"><label>Bienvenido/a: <?php echo $nombre2['nomUsuario']; ?></label></td>
                    <td width="50"><a href="../php/logout.php">Salir</a></td>
                </tr>
            </table>
        </header>

    </body>
</html>
