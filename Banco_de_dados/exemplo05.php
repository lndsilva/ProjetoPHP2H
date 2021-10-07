<?php
	
	$localhost = 'localhost';
	$user_name = 'etecia';
	$senha = '123456';

	$con = mysqli_connect($localhost,$user_name,$senha);
	
	$sql="DROP DATABASE dbetecia2hpw2";

	if (mysqli_query($con,$sql)){
	
		echo "Base de Dados removida com sucesso!!";
	
	}else{
	
		echo "Erro: " .mysqli_error($con);
	
	}
	
	mysqli_close($con);
?>


