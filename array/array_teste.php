<pre>
<?php 

	$arr = array(10,11,12,13);

	var_dump($arr);

 ?>
 </pre>
 <pre>
 <?php 

 	$arr = array("melancia","banana","laranja","abacates");

 	print_r($arr);
  
  ?>
  </pre>
  <pre>
  	<?php 

  	$arr = array();

  		$arr[] = 10;
  		$arr[] = 11;
  		$arr[] = 12;
  		$arr[] = 13;

  		echo "O vetor tem ".count($arr)." elementos<br/>";

  		print_r($arr);

  	?>

  </pre>
  	<?php 

  		$arr = array();

  		array_push($arr, 10);
  		array_push($arr, 11);
  		array_push($arr, 12);
  		array_push($arr, 13);

  		foreach ($arr as $valor) {
  			echo "$valor <br/>";
  		}
  	?>


