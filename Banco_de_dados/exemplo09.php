<?php
	
	$localhost = 'localhost';
	$user_name = 'root';
	$senha = "";
	$db = "dbPessoa";


	$con = mysqli_connect($localhost,$user_name,$senha,$db);

		if (mysqli_connect_errno()){

				echo "Erro ao conectar com o banco de dados" . mysqli_connect_error();

		}else{

			$sql = "SELECT * FROM Pessoa";

			$resultado = mysqli_query($con,$sql);

			echo "<h2>Pessoas</h2>";

		while($pessoa = mysqli_fetch_array($resultado)){

		echo $pessoa['nome'] . " " . $pessoa['sobrenome'] . " - " .$pessoa['idade']. " anos<br><br/>";

		}

		mysqli_close($con);
	}
?>
