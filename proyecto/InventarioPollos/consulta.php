<?php

/* CONEXION CON LA BASE DE DATOS */
$conn = new mysqli($host, $usuario, $contrasena, $bdd);

if($conn ->connect_error)
	die ($conn ->connect_error);

//Consulta

if($_POST){

	$id = $_POST['id'];
	$q_select = "SELECT * FROM cliente WHERE id ='$id'";
	$r= $conn->query($q_select);
	$dato=$r->fetch_array(MYSQLI_ASSOC);
}

?>

<html>
<head>
	<title>Modificar</title>
	
</head>
<body>

<form method="post" action="modificar.php" >
<div>EDITAR USUARIO</div>
</br>
<div>
<div>
	<label for="nombre">Nombre: </label>
	
	<input type="text" name="nombre" value="<?php echo $dato['nombre'];?>" id ="nombre">

</div>
</br>
<div>
	<label for="apellido">Apellido: </label>
	<input type="text" name="apellido" value="<?php echo $dato['apellido'];?>" id="apellido">
</div>
</br>
<div>
	<label for="fechanacimiento">Fecha de Nacimiento:</label>
	<input type="text" name="fechanacimiento" value="<?php echo $dato['fechanacimiento'];?>" id="fechanacimiento">
</div>
</br>
<div>
	<label for="direccion">Direcci&oacute;n: </label>
	<input type="text" name="direccion" value="<?php echo $dato['direccion'];?>" id="direccion">
</div>
</br>
<div>
	<label for="telefono">Tel&eacute;fono: </label>
	<input type="text" name="telefono" value="<?php echo $dato['telefono'];?>" id="telefono">
</div>
</br>
<div>
	<label for="estadocivil">Estado Civil: </label>
	<input type="text" name="estadocivil" value="<?php echo $dato['estadocivil'];?>" id="estadocivil">
</div>
</br>
<div>
	<label for="departamento">Departamento: </label>
	<input type="text" name="departamento" value="<?php echo $dato['departamento'];?>" id="departamento">
</div>
</br>
</br>
<input type="hidden" value="<?php echo $dato['id'];?>"  name="id">
<div>
	<input type="submit" value="Modificar" name="modificar">
</div>
</br>
</br>
</form>
</body>
</html>
