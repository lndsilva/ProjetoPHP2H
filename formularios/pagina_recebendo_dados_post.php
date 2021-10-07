<?php 
	
	echo "<h3>Recebendo dados - POST</h3>";
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];


	echo "<b>Nome: </b>".$nome;
	echo "<br/>";
	echo "<b>Senha: </b>".$senha;
	echo "<br/>";
	echo "<pre>";

	var_dump($_POST);

	echo "<br/>";

	print_r($_POST);
    
    echo "</pre>";

 ?>

 

 