<?php

$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);

			if (mysqli_connect_errno()){

			echo "Erro: " . mysqli_connect_error();

		}else{
			$sql = "SELECT * FROM Pessoa ORDER BY nome ASC, sobrenome DESC";
			
			$resultado = mysqli_query($con,$sql);
			
			echo "<h2>Pessoas</h2>";
		
		while($pessoa = mysqli_fetch_array($resultado)){
		
			echo $pessoa['nome'] . " " . $pessoa['sobrenome']." " .	$pessoa['idade']." anos<br>";
		}
	mysqli_close($con);
	}
?>
