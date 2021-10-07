<?php

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);

	if (mysqli_connect_errno()){
	
	echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
	}
	
	$sql = "DELETE FROM pessoa WHERE codigo = 9";
	
	mysqli_query($con,$sql);

	echo "Registro excluido com sucesso!!! ";
	
	mysqli_close($con);
?>
