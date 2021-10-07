<?php
	// Criando uma conexão com o bando de dados
	
	$con = mysqli_connect("localhost","etecia","123456");
	
	// Checando a conexão
	
	if (mysqli_connect_errno()){
	
	echo "Erro ao conectar com a base de dados: " . mysqli_connect_error();
	
	}else{
	
	echo "Conexão Aberta";
	
	}
?>

