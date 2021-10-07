<?php 
	$nome = "Armandino"; //variável local no script

	//implementação de uma função

	function exibir(){
		$nome = "Josefina"; //variável local na função

		echo "Valor da variável dentro da função ".$nome;
	}

	exibir(); //chamada da função

	echo "<br/> Valor da variável fora da função ".$nome;


 ?>

