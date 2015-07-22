<?php
  $respuesta = "";
  if($_POST){
    $nombre = $_POST['nombre'];

    if($nombre == "karina"){
      $respuesta = 'No se permite el ingreso';
    } else{
      $respuesta = 'Acceso permitido';
    }
  }

echo $respuesta;