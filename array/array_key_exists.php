<?php 

	$nomes = array("MA"=>"Maria","ZE"=>"José","PE"=>"Pedro","AN"=>"Ana");

	if (array_key_exists("MA", $nomes)) {
		
		echo "<br/> Nome encontrado no vetor, através da chave.";
	}else{

		echo "<br/> Nome não encontrado no vetor.";
	}

 ?>

 