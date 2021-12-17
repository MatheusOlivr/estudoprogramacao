<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>meu site</title>
	<style>
		#Tabela,#Tabela td,#Tabela th
		{
			text-align: center;
			border: solid 4px black;
			border-collapse: collapse;
			font-size: 1.3em;
			padding: 1vw;
		}
		#Tabela__titulo
		{
			background: black;
			color: white;
		}
	</style>
</head>
<body>
	<table id = "Tabela">
		<tr id = "Tabela__titulo">
			<th colspan="3">TABELA</th>
		</tr>
		<tr id = "Tabela__titulo">
			<th>Author</th>
			<th>Versão</th>
			<th>Linguagem</th>
		</tr>
		<tr>
			<td><?php echo htmlspecialchars( $autor, ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
			<td><?php echo htmlspecialchars( $versao, ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
			<td><?php echo htmlspecialchars( $linguagem, ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
		</tr>
	</table>
</body>
</html>