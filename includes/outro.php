<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Primeiro PHP</title>
</head>
<body>
	<?php  

	echo 'a', 'b', 'c';
	echo "</br>";
	print('abc');
	$vetor = array('palio','gol','fiesta','corsa');
	echo "</br>";
	var_dump($vetor);
	echo "</br>";
	print_r($vetor);
	echo "</br>";
	echo "</br>";
	echo "Variáveis...";
	echo "</br>";
	$nome = "João";
	$sobrenome = "da Silva";
	echo "$sobrenome, $nome";

	$exibir_nome = true;

	if ($exibir_nome) {
		echo "</br>";
		echo "José da Silva";
	}

	$umidade = 91;

	$vai_chover = ($umidade > 90);

	if ($vai_chover) {
		echo "</br>";
		echo "Está chovendo!!!";
	}

	// número decimal
	$a= 1234;
	// um número negativo
	$a= -123;
	// número octal (equivalente a 83 em decimal)
	$a= 0123;
	// ponto flutuante
	$a= 1.234;
	// notação científica
	$a= 4e23;

	//tipo string

	$variavel = 'Isto é um teste';
	
	$variavel = "Isto é um teste";

	?>
</body>
</html>