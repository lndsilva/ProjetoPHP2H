<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página WEB - Sessão de Usuário</title>
</head>
<body>
	<?php 

		session_start();

		$_SESSION['nome'] = "Administrador";

		echo "<pre>";

		var_dump($_SESSION);

		echo "<pre/>";

		print_r($_SESSION);

	 ?>
	 <h3>Sessão de Usuário</h3>
	 Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>
