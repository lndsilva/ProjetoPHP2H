<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Utilizando Switch-case</title>
</head>
<body>

<?php 
	$escolha = 2;

	switch ($escolha) {
		case 1:
			echo "<h1>A opção 1 foi selecionada</h1>";
		break;

		case 2:
			echo "<h1>A opção 2 foi selecionada</h1>";
		break;
		
		case 3:
			echo "<h1>A opção 3 foi selecionada</h1>";
		break;
		
		default:
			echo "<h1>Opção incorreta</h1>";
			break;
	}

 ?>

</body>
</html>