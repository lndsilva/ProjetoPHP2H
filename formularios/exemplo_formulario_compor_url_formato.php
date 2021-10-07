<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário - Recuperando dados - variáveis para compor formato- URL</title>
</head>
<body>
	<h2>Formulário - Recuperando dados - variáveis para compor formato - URL</h2>

	<?php 

		$idBanco = 10;

		$nomeUser = "admin";

		echo "<a href='passando_dados_compor_formato.php?id=";
		echo $idBanco;
		echo "&user=";
		echo $nomeUser;
		echo "'>Passando dados via URL </a>";

	 ?>


</body>
</html>

