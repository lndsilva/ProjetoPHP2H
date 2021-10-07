<?php
	// Criando conexão com o bando de dados
	$host_name = "localhost";
	$user_name = "etecia";
	$password  = "123456";
	$db   = "bd_exemplo0";

	
	$con = mysqli_connect($host_name,$user_name,$password,$db);
	
	// Checar a conexão
	
		if (mysqli_connect_errno()){
	
			echo "Erro ao conectar com a base de dados: ".
	
		mysqli_connect_error();
	
		}else{
	
			echo "Conexão Aberta <br/>";
	
		mysqli_close($con);

			echo "Conexão Fechada";
	
	}
?>

