<?php 

	$localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbFormulario";
 
	$conn = mysqli_connect($localhost,$user_name,$senha,$db);

	if (mysqli_connect_error()) {
		echo "Erro ao conectar com o banco de dados" . mysql_connect_error();
	}
?>