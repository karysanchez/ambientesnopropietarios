<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$Notasprogramacion = array(
    'estudiante' => "Pedro", 'nota' => 8,
    'estudiante' => "David", 'nota' => 3,
    'estudiante' => "Andrea", 'nota' => 10,
    'estudiante' => "Esteban", 'nota' => 7,
    'estudiante' => "Daniela", 'nota' => 10,
);

$Notasredes = array(
    'estudiante' => "Gabriela", 'nota' => 6,
    'estudiante' => "Maria", 'nota' => 9,
    'estudiante' => "Andrea", 'nota' => 10,
);


print_r($Notasredes);
print_r($Notasprogramacion);


for ($Notasprogramacion = 1; $Notasprogramacion >= 5; $Notasprogramacion++) {
    print_r($Notasprogramacion);
}







if ($_POST) {

    /* @var $Alumno type */
    $Alumno = $_POST['estudiante'];
    $Calificacion = $_POST['nota'];

    if ($Alumno == $Notasprogramacion && $Calificacion == $Notasprogramacion) {
        print_r($Notasprogramacion);
    } else {
        print_r($Notasredes);
    }
}
  



