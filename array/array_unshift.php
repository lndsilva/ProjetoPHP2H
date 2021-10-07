<?php 

	$nomes = array("Maria","José","Pedro");

	array_unshift($nomes, "Ana");

	foreach ($nomes as $item) {
		
		echo "<br/>".$item;
	}
	echo "<br/> <pre>";

	var_dump($nomes);

	echo "<br/>";


 ?>

 