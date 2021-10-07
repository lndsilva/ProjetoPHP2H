<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Testando variáveis e array PHP</title>
</head>

	<body>
		
		<p>Declaração de variáveis</p>

		<?php 

			$nome = "Etec Irmã Agostina";

			$num = 10;

			$real = 20.50;

			$flag = true;

			echo "O valor da variável: ".$nome."<br/>";
			echo "O valor da variável: ".$num."<br/>";
			echo "O valor da variável: ".$real."<br/>";
			echo "O valor da variável: ".$flag."<br/>";

			print_r($nome."<br/>");
			print_r($num."<br/>");
			print_r($real."<br/>");
			print_r($flag."<br/>");

			var_dump($nome."<br/>");
			var_dump($num."<br/>");
			var_dump($real."<br/>");
			var_dump($flag."<br/>");


		 ?>

	</body>

</html>