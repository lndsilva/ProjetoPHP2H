<?php
	// Criando conexão com a base de dados db_2HPW2

	$localhost = 'localhost';
	$user_name = 'etecia';
	$senha = '123456';
	$db = 'dbetecia2hpw2';
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);
	
	$sql="CREATE TABLE Pessoa(
			nome VARCHAR(100),
			sobrenome VARCHAR(100),
			idade INT)";
	
	if (mysqli_query($con,$sql)){
	
	echo "Tabela criada com sucesso!!";
	
	}else{
	
	echo "Erro ao criar a tabela!!! " .mysqli_error($con);
	
	}
	
	mysqli_close($con);
?>

