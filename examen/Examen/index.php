<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //DECLARAMOS LOS ARREGLO
        $Usuarios = array(
            'usuario' => "juan", 'contraseña' => "123456",
            'usuario' => 'maria', 'contraseña' => '654321',
            'usuario' => 'andres', 'contraseña' => '0987654',
        );
        
header('Location: inicio.php');
exit;

        //FUNCION 
        if ($_POST) {
            $Usuario = $_POST ['usuario'];
            $Contraseña = $_POST ['contraseña'];

            IF ($Usuario == "" && $Contraseña == "") {
                echo 'Escriba usuario y la contraseña';
            } elseif ($Usuario || $Usuarios && $Contraseña || $Usuario) {
                echo 'La contraseña y el usuario ingresados son incorrectos';
            } else {

                echo 'SU NOMBRE DE USUARIO ES EL SIGUIENTE: ', $Usuarios;
            }
        }
        ?>
            


















