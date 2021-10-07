<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário exemplo - PHP</title>
</head>
<body>

	<form name="exemplo" action="exemplo_form.php" method="post" >
		
		Nome: <input type="text" name="nome" maxlength="50"><br/><br/>
		Senha: <input type="password" name="senha" maxlength="50"><br/><br/>
		Selecione o arquivo: <input type="file" name="arquivo"><br/><br/>
		<input type="reset" name="limpar" value="Limpar">


	</form>

</body>
</html>