<?php

/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);

if($conn->connect_error)
	die ($conn->connect_error);




if($_POST){
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$date = $_POST['fechanacimiento'];
	$direc = $_POST['direccion'];
	$telef = $_POST['telefono'];
	$est_civ = $_POST['estadocivil'];
	$depart = $_POST['departamento'];

	if($nom != ''&&$ape !=''&&$date !=''&&$direc !=''&&$telef!=''&&$est_civ!=''&&$depart!=''){
		$q_insert = "INSERT INTO empleado(nombre, apellido, fechanacimiento,
			direccion, telefono, estadocivil, departamento)
			VALUES ('$nom', '$ape', '$date', '$direc', '$telef', 
			'$est_civ', '$depart')";
			$resp = $conn->query($q_insert);

			if(!$resp){
				echo '<div>Hay un error al insertar'.$conn->error.'</div>';
			}
			else{
				echo '<div>Dato ingresado correctamente</div>';
				header('Location: index.php');
			}
		}
		else{
				echo '<div>Ingrese Datos por Favor</div>';
			}
		}
?>
