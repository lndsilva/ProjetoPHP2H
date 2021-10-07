<?php 

	$variavel = "Ana";

	print($variavel);

	$nomes = array("MA" => "Maria", "ZE" => "José", "PE" => "Pedro");

	echo "<br/>";
	echo "<pre>";

	var_dump($nomes);
	echo "</pre>";

	if (is_array($variavel)) {
		
		echo "<br/> Variável é um array";
	}else
	{
		echo "<br/>Variável não é um array";
	}
	if (is_array($nomes)) {
		
		echo "<br/>Nomes é um array";
	}
	else{
		echo "</br>Nomes não é um array";
	}
 ?>

 

