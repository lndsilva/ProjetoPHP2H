<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página WEB - Sessão de Usuário 2</title>
</head>
<body>
	<?php 

		session_start();

		$_SESSION['nome'] = "Administrador";
		
		//elimina todas as variáveis de sessão mas, mantém a sessão ativa.
		//session_unset();
		
		//elimina toda a sessão; 
		session_destroy();
		
		echo "<pre>";

		var_dump($_SESSION);
		
		echo "</pre>";

		print_r($_SESSION);


	 ?>
	 <h3>Sessão de Usuário</h3>
	 Bem vindo, Sr. <?php echo $_SESSION['nome']; ?>

</body>
</html>
