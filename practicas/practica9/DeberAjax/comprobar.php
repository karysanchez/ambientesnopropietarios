<?php
	$usu = $_GET['usuario'];
	$conn = new Mysqli($host, $usuario,$cont,$bdd);
//        $conn = new \mysqli($host, $usuario, $contrasena, $bdd);
	mysql_select_db("registro");
	$query = "SELECT id FROM registro WHERE usuario ='$usu'";
	$resp = mysql_query($query, $conn);
	if(mysql_fetch_assoc($resp)){
		echo "false";
	}else{
		echo "true";
	}
?>

