<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário - Recuperando dados - Simplificando - URL</title>
</head>
<body>
	<h2>Formulário - Recuperando dados - Simplificando - URL</h2>

	<?php 

		$idBanco = 10;
		$nomeUser = "admin";

		echo "<a href='passando_dados_compor_formato.php?id=".$idBanco."&user=".$nomeUser."'>Passando dados via URL</a>";

		echo "<br/>";
		
		echo "<br/>";
		
		echo "<a href='passando_dados_compor_formato.php?id=.$idBanco&user=.$nomeUser'>Passando dados via URL</a>";
	 ?>
</body>
</html>


