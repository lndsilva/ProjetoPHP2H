<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Catálogo de produtos</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	</head>

	<body>
		

		<div class="container">
			<div class="row">
				<h1>Catálogo de produtos</h1>
			</div>
  			<div class="row">
    			<div class="col-md-4">
    				<form role="form" action="catalogo_produtos.php" method="get">
					  <div class="form-group">
					    <label for="Produto">Nome do produto:</label>
					    <select class="form-control" name="id_produto" id="id_produto">
					    	<option value="1">Mesa</option>
							<option value="2">Geladeira</option>
							<option value="3">Sofá</option>
							<option value="4">Microondas</option>
					   	</select>
					  </div>
					  <button type="submit" class="btn btn-default">Ver detalhes</button>
					</form>
    			</div>
    			<div class="col-md-4"></div>
    			<div class="col-md-4"></div>
  			</div>
		</div>
	</body>
</html>