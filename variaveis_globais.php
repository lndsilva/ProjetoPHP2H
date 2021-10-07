
<?php 

	$ano = 2020;

	//implementação de uma função

	function exibir(){
		GLOBAL $ano; //definição da variável global
		$ano++; //incremento $ano = $ano + 1;
		return $ano;
	}

	echo "<br/> Ano: ".$ano;
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".exibir();
	echo "<br/> Ano: ".$ano;
 ?>

 