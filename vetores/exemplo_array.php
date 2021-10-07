<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo de uso de Array</title>
</head>
<body>

	<p>Declarando variáveis</p>

	<?php 

		$nome  = "Pedro";
		$nome1 = "Paulo";
		$nome2 = "Lucas";
		$nome3 = "João";
		$nome4 = "Mateus";

		echo "O nome é: ".$nome."<br/>";
		echo "O nome é: ".$nome1."<br/>";
		echo "O nome é: ".$nome2."<br/>";
		echo "O nome é: ".$nome3."<br/>";
		echo "O nome é: ".$nome4."<br/>";
	 ?>
	 <p>Utilizando Array</p>

	 <?php 

	 $nomes = array();

	 $nome = array("Pedro","Paulo","Lucas","Joao","Mateus");

	 echo "<pre>";
	 
	 print_r($nome);

	 echo "<br/>";

	 var_dump($nome);

	 echo "</pre>";

	 echo "O vetor : ".$nome[4]."<br/>";

	foreach ($nome as $valor) {
		echo " - ".$valor;
	}


	  ?>
</body>
</html>