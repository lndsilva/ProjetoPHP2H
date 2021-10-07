<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Instrução if</title>
</head>
<body>
	
	<?php 

	print("<h1>Sistema de avaliação</h1>");

	$nota = 7.0; //número real

	if ($nota >= 7.0) { //verdadeiro
		echo "APROVADO <br/>";
		print_r($nota."<br/>");
		var_dump($nota."<br>");
	}
	else{
		echo "REPROVADO <br/>";//Falso
		var_dump($nota);
	}

 ?>


</body>
</html>



