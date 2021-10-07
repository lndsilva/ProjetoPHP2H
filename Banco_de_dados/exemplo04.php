<?php
	
	$host_name = 'localhost';
	$user_name = 'etecia';
	$password = "123456";

	$con = mysqli_connect($host_name,$user_name,$password);
	
		if (mysqli_connect_errno()){
	
			echo "<br/>Erro ao conectar com a base de dados: ".
	
		mysqli_connect_error();
	
		}else{
	
			// Criando base de dados
	
			$sql="CREATE DATABASE dbEtecia2HPW2";
			
				if (mysqli_query($con,$sql)){
	
					echo "<br/>Banco de dados criado com sucesso!!";
	
				}else{
	
					echo "<br/>Erro ao criar o banco de dados: " .mysqli_error($con);
	
				}
	
		mysqli_close($con);
	}
?>
