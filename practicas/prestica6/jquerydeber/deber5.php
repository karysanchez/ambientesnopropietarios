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
    <center><h6>HACIENDO MIS INTERESES</h6></center>


    <!--
    HACIENDO LOS BOTONES
    -->
    <p><b>DOCUMENTO PARA USAR BOTONES</b></p>

    <form>
        <br><div><strong>INGRESE LOS RESPECTIVOS INTERESES</strong></div></br>

        <br>
        <div>
            <label for="intereses">Intereses: </label>
        </div>

        </br>

        <br>


        <!-- BOTON GUARDAR INTERESES --> 
        <input id="guardar" type="button" value ="Guardar" name="guardar">

        </br>
        <br>
        <!-- BOTON ELIMINAR TEXTOS--> 
        <input id="elimina" type="button" value ="Eliminar" name="eliminar">

        </br>
        <br>
        <!-- BOTON AGREGAR TEXTOS--> 
        <input id="agrega" type="button" value ="agregar" name="agregar">

        </br>




    </form>



    <!--AÑADIENDO EL JQUERY-->
    <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            //Efectos

            $("#agrega").click(function () {
                $(this).after('<br><dd><input type="text" name="inter2" class="intereses"></dd><br>')
            });


            $("#elimina").click(function () {
                $("input").last().remove();
            });
        })
    </script>




    <?php
// put your code here
    ?>
</body>
</html>

