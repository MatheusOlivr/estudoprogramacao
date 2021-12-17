<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Envio de E-mail</title>
</head>
<body>
	<fieldset id = "Area-Formulario">
		<legend>Formulario de envio de e-mail</legend>
		<form id = "formulario" method = "POST">
			<label for = "emailDestinatario__input">Email de Destinatario ( se for mais de um colocar "," para separar)</label>
			<br>
			<textarea id = "emailDestinatario__input" name = "emailDestinatario__input"></textarea>
			<br>
			<label for = "nomeDestinatario__input">Digite o nome do dono do e-mail de Destinatario( se for mais de um colocar "," para separar)</label>
			<br>
			<input type= "text" name= "nomeDestinatario__input" id = "nomeDestinatario__input">
			<br>
			<label for = "descricaoMensagem__input">Digite a descrição da mensagem do e-mail</label>
			<br>
			<input type= "text" name= "descricaoMensagem__input" id = "descricaoMensagem__input">
			<br>
			<label for = "conteudoHtml__input">Digite aqui o nome do arquivo html da mensagem</label>
			<br>
			<input type= "text" name= "conteudoHtml__input" id = "conteudoHtml__input">
			<br>
			<label for = "conteudoSimples__input">Conteudo simples da mensagem</label>
			<br>
			<textarea id = "conteudoSimples__input" name = "conteudoSimples__input"></textarea>
			<br>
			<button>Enviar e-mail</button>
		</form>
	</fieldset>
</body>
</html>
<?php 
	include_once("controller.php");
?>
