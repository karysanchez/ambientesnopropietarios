<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>DEBER DE LA SESION 11</title>
        <link rel="stylesheet" type="text/css" href="estilos.cs.css">
    </head>
    <body>
        <!--
            ELABORANDO MI ENCABEZADO
        -->
    <center><h1> ESCUELA POLITECNICA NACIONAL</h1>
        <h2>ESFOT</h2>
        <h3>AMBIENTES NO PROPIETARIOS</h3>
        <h4>DEBER DE LA SESION 11</h4></center>
    <h5>TEMA: Uso de jquery</h5>
    <center><h6>HACIENDO MI DOCUMENTO HTML</h6></center>


    <!--
    HACIENDO MI MENSAJE PARA USAR FOCUS y BLUR
    -->
    <p><b>DOCUMENTO PARA USAR FOCUS, BLUR</b></p>

    <p>
        <input type="text" id="tex1">
        <input type="text" id="tex2">
    </p>



    <!--AÑADIENDO EL JQUERY-->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            $("#tex1").focus(function () {
                $(this).css('background-color', '#DF1AD5')
            });
            $("#tex1").blur(function () {
                $(this).css('background-color', '#5C1ADF')
            });
            $("#tex2").focus(function () {
                $(this).css('background-color', '#1ADF2E')
            });
            $("#tex2").blur(function () {
                $(this).css('background-color', '#D9DF1A')
            });
        });

    </script>





    <?php
// put your code here
    ?>
</body>
</html>

