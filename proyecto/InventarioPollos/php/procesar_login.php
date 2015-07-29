<?php
include('conexion.php');
$usu = addslashes($_POST['usu']);
$pass = addslashes($_POST['pass']);
$area = addslashes($_POST['area']);

$usuario = mysql_query("SELECT * FROM usuario WHERE ciUsuario = '$usu'");
if(mysql_num_rows($usuario)<1){
	echo 'usuario';
}else{
	$area = mysql_query("SELECT * FROM usuario WHERE ciUsuario = '$usu' AND codPerfil = '$area'");
	if(mysql_num_rows($area)<1){
		echo 'area';
	}else{
		$consulta = mysql_query("SELECT * FROM usuario WHERE ciUsuario= '$usu' AND contrasenaUsuario = '$pass'");
		if(mysql_num_rows($consulta)<1){
			echo 'password';
		}else{
			$consulta2 = mysql_fetch_array($consulta);
			$_SESSION['ciUsuario'] = $consulta2['ciUsuario'];
			$_SESSION['codPerfil'] = $consulta2['codPerfil'];
			switch($consulta2['codPerfil']){
				case '1':
					echo 'administrador';
				break;
				case '2':
					echo 'vendedor';
				break;
			}
		}
	}
}
?>
