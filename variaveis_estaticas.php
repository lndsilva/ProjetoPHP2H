<?php 
	function exibir(){
		STATIC $ano; //definindo variáveil estática
		$ano++;
		echo "<br/>". $ano;

	}

	echo exibir();
	echo exibir();
	echo exibir();
 ?>

 