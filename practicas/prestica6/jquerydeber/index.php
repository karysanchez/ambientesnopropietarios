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
        HACIENDO MI ENCABEZADO
        -->
        <div id="intro">
            <center><h1> ESCUELA POLITECNICA NACIONAL</h1>
                <h2>ESFOT</h2>
                <h3>AMBIENTES NO PROPIETARIOS</h3>
                <h4>DEBER DE LA SESION 11</h4></center>
            <h5>TEMA: Uso de jquery</h5>
            <center><h6>HACIENDO MI DOCUMENTO HTML</h6></center>
            <!--
            ELABORANDO MIS PARRAFOS
            -->
            <p><b>PARRAFO UNO</b></p>
            <p>jQuery es una biblioteca de JavaScript, creada inicialmente por John Resig, que 
                permite simplificar la manera de interactuar con los documentos HTML, manipular el 
                árbol DOM, manejar eventos, desarrollar animaciones y agregar interacción con la 
                técnica AJAX a páginas web. Fue presentada el 14 de enero de 2006 en el BarCamp NYC.
                jQuery es la biblioteca de JavaScript más utilizada.</p></div>
        <p><b>PARRAFO DOS</b></p>
        <p>jQuery es software libre y de código abierto, posee un doble licenciamiento bajo la 
            Licencia MIT y la Licencia Pública General de GNU v2, permitiendo su uso en proyectos
            libres y privados.2 jQuery, al igual que otras bibliotecas, ofrece una serie de 
            funcionalidades basadas en JavaScript que de otra manera requerirían de mucho más 
            código, es decir, con las funciones propias de esta biblioteca se logran grandes 
            resultados en menos tiempo y espacio.</p>
        <p><b>LISTA UNO</b></p>
        <ul> 
            <li id="elementouno"><button>Tortilla</button></li>
            <li><button>Jamon</button></li>
            <li><button>Queso</button></li>
        </ul>
        <p><b>LISTA DOS</b></p>
        <ul> 
            <li id="lista">Coca Cola</li>
            <li>Leche</li>
            <li>Te</li>
        </ul>
        
        <p><b>BOTON UNO OCULTAR TODO EL HTML</b></p>
        <button id="ocultar">OCULTAR TODO EL HTML</button>
        <p><b>BOTON DOS OCULTAR EL BOTON OCULTAR</b></p>
        <button id="ocultardos">OCULTAR EL BOTON OCULTAR</button>
        <p><b>BOTON TRES OCULTAR CLASS INTRO</b></p>
        <button id="ocultartres">OCULTAR LA CLASE INTRO</button>
        <p><b>PARA OCULTAR EL ELEMENTO UNO DE LA LISTA UNO SELECCIONE DIRECTAMENTE</b></p>
        <p><b>BOTON CUATRO OCULTAR LOS DOS PRIMEROS ELEMENTOS DE LAS DOS LISTAS</b></p>
        <button id="ocultarcuatro">OCULTAR LOS PRIMEROS ELEMENTOS</button>




        <!--AÑADIENDO EL JQUERY-->
        <script type="text/javascript" src="js/jquery-2.1.4.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                //OCULTAR TODO EL HTML
                $("#ocultar").click(function () {
                    $('html').toggleClass('hide');
                    if ($(this).html() == 'OCULTAR TODO EL HTML')
                        $(this).html('MOSTRAR TODO EL HTML');
                    else
                        $(this).html('OCULTAR TODO EL HTML');
                })

                //OCULTAR EL BOTON OCULTAR
                $("#ocultardos").click(function () {
                    $('button').toggleClass('hide');
                    if ($(this).html() == 'OCULTAR EL BOTON OCULTAR')
                        $(this).html('MOSTRAR BOTON OCULTAR');
                    else
                        $(this).html('OCULTAR EL BOTON OCULTAR');
                })

                //OCULTAR LAS CLASS INTRO
                $("#ocultartres").click(function () {
                    $('#intro').toggleClass('hide');
                    if ($(this).html() == 'OCULTAR LA CLASE INTRO')
                        $(this).html('MOSTRAR LA CLASE INTRO');
                    else
                        $(this).html('OCULTAR LA CLASE INTRO');
                })
                
                //OCULTAR EL PRIMER ELEMENTO DE LA PRIMERA LISTA
                $("#elementouno").click(function () {
                    $('#elementouno').toggleClass('hide');
                    if ($(this).html() == 'Tortilla')
                        $(this).html('Tortilla');
                    else
                        $(this).html('Tortilla');
                })
                
                 //OCULTAR LOS PRIMEROS ELEMENTOS DE LAS LISTAS
                $("#ocultarcuatro").click(function () {
                    $('#elementouno, #lista').toggleClass('hide');
                    if ($(this).html() == 'OCULTAR LOS PRIMEROS ELEMENTOS')
                        $(this).html('MOSTRAR LOS PRIMEROS ELEMENTOS');
                    else
                        $(this).html('OCULTAR LOS PRIMEROS ELEMENTOS');
                })





            })</script>


        <?php
        // put your code here
        ?>
    </body>
</html>
