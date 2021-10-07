<?php
	
	// Criando conexão com a base de dados db_2HPW2

	$localhost = 'localhost';
	$user_name = 'etecia';
	$senha = '123456';
	$db = 'dbetecia2hpw2';
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);
	
	// Verificando a conexão
	
	if (mysqli_connect_errno()){
	
		echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
	
	}
	
	$sql1 = "INSERT INTO Pessoa	VALUES('Ana','Souza', 20)";
	
	mysqli_query($con,$sql1);
	
	$sql2 = "INSERT INTO Pessoa(nome,sobrenome,idade)VALUES('Carlos','Costa', 21)";
	
	mysqli_query($con,$sql2);

	echo "Registros inseridos com sucesso!!! ";
	
	mysqli_close($con);
?>

