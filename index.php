<?php
	include "conexao.php";
	$consulta = $conexao->query("SELECT * FROM pessoa");
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Listagem de pessoas</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<a href="formCadastrar.php">Cadastrar uma nova pessoa</a>
	<table>
		<tr>
			<th>Código</th>
			<th>Nome</th>
			<th>Idade</th>
			<th colspan="2">Ações</th>
		 </tr>
		 
		 <?php while($linha = $consulta->fetch()): ?>
		 <tr>
			  <td><?php echo $linha['codigo'] ?></td>
			  <td><?php echo $linha['nome'] ?></td>
			   <td><?php echo $linha['idade'] ?></td>
			   <td id="alterar"><?php echo "<a class='botaoAcoes' href='formAlterar.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]&'>Alterar</a>" ?></td>
			   <td id="excluir"><?php echo "<a class='botaoAcoes' href='formExcluir.php?codigo=$linha[codigo]&nome=$linha[nome]&idade=$linha[idade]&'>Excluir</a>" ?></td>
		  </tr>
		 <?php endwhile ?>
		 
	</table> 		
</body>
</html>	