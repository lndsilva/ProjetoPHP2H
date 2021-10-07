<?php

	$localhost = 'localhost';
	$user_name = 'etecia';
	$senha = "123456";
	$db = "dbPessoa";


	$con = mysqli_connect($localhost,$user_name,$senha,$db);
	
		if (mysqli_connect_errno()){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{
	
			$sql = "INSERT INTO pessoa(nome,sobrenome,idade)VALUES('$_POST[nome]','$_POST[sobrenome]',$_POST[idade])";
	
		if(mysqli_query($con,$sql)){
	
			echo "Pessoa inserida com sucesso!!!";
	
		}else{
	
			echo "Erro ao inserir: ".mysqli_error($con);
	
		}
	
		mysqli_close($con);
	}
?>
