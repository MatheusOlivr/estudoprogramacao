<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORMULARIO</title>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<fieldset>
		<legend>FORMULARIO CADASTRO</legend>
		<form method = "POST" action = "validador.php">
			<label for = "inputEmail">E-mail:</label>
			<br>
			<input type = "text" name ="inputEmail" id = "inputEmail">
			<br>
			<label for = "inputPassword">Senha:</label>
			<br>
			<input type = "password" name ="inputPassword" id = "inputPassword">
			<br>
			<label for = "inputPassword">A mesma senha:</label>
			<br>
			<input type = "password" name ="inputPassword" id = "inputPassword">
			<br>
			<div class="g-recaptcha" data-sitekey="6Lex8igdAAAAAHfMmuAqsuc6pNqLy0kGJy7_BrMO"></div>
			<button>CADASTRAR</button>
		</form>
	</fieldset>
</body>
</html>
<?php
?>
<!--
esse arquivo foi criado por um robo
-->