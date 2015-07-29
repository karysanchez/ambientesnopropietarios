<?php

/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

//Borrar

if($_POST){

	$id = $_POST['id'];

	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$date = $_POST['fechanacimiento'];
	$direc = $_POST['direccion'];
	$telef = $_POST['telefono'];
	$est_civ = $_POST['estadocivil'];
	$depart = $_POST['departamento'];
	$q_actualizar = "UPDATE empleado SET nombre='$nom', apellido='$ape',fechanacimiento='$date',
	direccion='$direc', telefono='$telef',estadocivil='$est_civ', departamento='$depart' WHERE id='$id'";
	$r= $conn->query($q_actualizar);
	if(!$r){
		echo '<div>error al modificar</div>';
	}else{
		echo '<div>dato modificado</div>';
	}
}

header('Location: index.php');
?>

