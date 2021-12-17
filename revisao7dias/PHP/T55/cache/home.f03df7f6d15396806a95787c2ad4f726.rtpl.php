<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOME</title>
</head>
<body>
	<h3>HELLO <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
	<b>Você tem <?php echo htmlspecialchars( $idade, ENT_COMPAT, 'UTF-8', FALSE ); ?> anos</b>
	<br>
	<b>Provavelmente nasceu em <?php echo htmlspecialchars( $nascimento, ENT_COMPAT, 'UTF-8', FALSE ); ?></b>
</body>
</html>