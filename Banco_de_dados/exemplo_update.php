<?php
$localhost = 'localhost';
$user_name = 'root';
$senha = "";
$db = "dbPessoa";
	
	$con = mysqli_connect($localhost,$user_name,$senha,$db);

	if (mysqli_connect_errno()){
		
		echo "Erro: " . mysqli_connect_error();
		
		}

		else{
		
		$sql1 = "UPDATE pessoa SET idade = 23 WHERE codigo=3";

		mysqli_query($con,$sql1);

		$sql2 = "SELECT * FROM pessoa WHERE idade = 23";

		$resultado = mysqli_query($con,$sql2);

		echo "<h2>Pessoa</h2>";

		while($pessoa = mysqli_fetch_array($resultado)){

		echo $pessoa['nome'] . " " .$pessoa['sobrenome'].", " .	$pessoa['idade']." anos<br>";

		}
	mysqli_close($con);
	}
?>
