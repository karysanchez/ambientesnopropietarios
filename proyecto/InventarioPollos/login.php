<?php
include('php/conexion.php');
if (isset($_SESSION['ciUsuario']) == true and isset($_SESSION['codPerfil']) == true) {
    if ($_SESSION['codPerfil'] == '1') {
        header('Location: administrador.php');
    } else if ($_SESSION['codPerfil'] == '2') {
        header('Location: vendedor.php');
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login por Areas</title>

        <link href="css/estilo.css" rel="stylesheet">
            <script src="js/jquery_1.js"></script>
            <script src="js/myjava.js"></script>
    </head>

    <body>
        <div class="login" align="center">
            <h2>INICIE SESION</h2>
            <label>Ingrese su Usuario:</label>
            <br />
            <input type="text" id="usu"/>
            <br />
            <br />
            <label>Ingrese su Contraseña:</label>
            <br />
            <input type="password" id="pass"/>
            <br />
            <br />
            <label>Elija su Area:</label>
            <br />
            <select id="area">
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
            </select>
            <br />
            <br />
            <button id="ingresar">Ingresar</button>
            <br />
            <br />
            <div id="mensaje"></div>
        </div>
    </body>
</html>
