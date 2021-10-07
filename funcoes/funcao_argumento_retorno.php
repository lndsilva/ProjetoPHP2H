
<?php 
	//criando uma função com parâmetro e com retorno
	function dobro($n){
		
		$d = $n * 2;
		
		return $d;
	}

	$x = 6;
	//Imprimindo o valor da função com a chamada
	//e enviando o valor por parâmetro.
	//A função retorna o valor calculado.
	echo "<br/> O dobro de ".$x." = ".dobro($x);


 ?>