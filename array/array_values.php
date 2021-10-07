<?php 

	$nomes = array("MA"=>"Maria","ZE"=>"José","PE"=>"Pedro","AN"=>"Ana");

	$valores = array_values($nomes);


	foreach ($valores as $item) {
		echo "<br/>".$item;
	}

	echo "<pre>";

	print_r($valores);

	echo "</pre>";

 ?>

 