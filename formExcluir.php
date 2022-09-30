<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Excluir uma pessoa</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="index.php">Cancelar exclusão e voltar<br><br></a>	 		
    <p>Excluir o código<strong> <?php echo $_GET['codigo'] ?></strong> com o nome de <strong><?php echo $_GET['nome'] ?></strong> de <?php echo $_GET['idade'] ?> anos de idade?</p><br>
	<form action="excluir.php" method="POST">
		<input type="hidden" name="codigo" value="<?php echo $_GET['codigo'] ?>"><br>
		<input type="submit" value="Confirmar">
	</form>
</body>
</html>	