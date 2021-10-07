<?php
	
	// Criando uma conexão com a base de dados bd_exemplo
	
	$con = mysqli_connect("localhost", "etecia","123456", "bd_exemplo");
	
	// Checando a conexão
	
	if (mysqli_connect_errno()){
	
		echo "Erro ao conectar com a base de dados: " .	mysqli_connect_error();
	
	}
	else
	{
		echo "Banco de dados conectado!!!";
	}
?>

