<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário - Recuperando dados - variáveis para compor - URL</title>
</head>
<body>
	<h2>Formulário - Recuperando dados - variáveis para compor - URL</h2>

	<?php 

		$idBanco = 10;

		$nomeUser = "admin";

	 ?>

	<a href="passando_dados_compor_variaveis.php?id=<?php echo $idBanco; ?>&user=<?php echo $nomeUser;?>">Passando dados via URL</a>

</body>
</html>

