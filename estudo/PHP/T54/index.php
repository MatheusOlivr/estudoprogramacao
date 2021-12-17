<!DOCTYPE html>
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
			<label for = "destinoEmail__input">Email de destino ( se for mais de um colocar "," para separar)</label>
			<br>
			<textarea id = "destinoEmail__input" name = "destinoEmail__input"></textarea>
			<br>
			<label for = "destinoNome__input">Digite o nome do dono do e-mail de destino( se for mais de um colocar "," para separar)</label>
			<br>
			<input type= "text" name= "destinoNome__input" id = "destinoNome__input">
			<br>
			<label for = "descricaoMensagem__input">Digite a descrição da mensagem do e-mail</label>
			<br>
			<input type= "text" name= "descricaoMensagem__input" id = "descricaoMensagem__input">
			<br>
			<button>Enviar e-mail</button>
		</form>
	</fieldset>
</body>
</html>
<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$destinoEmail = explode(",",$_POST["destinoEmail__input"]);
		$destinoNome = explode(",",$_POST["destinoNome__input"]);
		$descricaoMensagem = $_POST["destinoMensagem__input"];
		$count = 0;
		include_once("phpmailer.php");
		foreach ($destinoEmail as $email)
		{
			$destino[$email] = $destinoNome[$count];
			$count++;
		}
		foreach ($destino as $email => $nome)
		{
			$mail->addAddress($email,$nome);
			if (!$mail->send())
			{
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} 
			else
			{
		    echo "<h2>Mensagens enviadas com sucesso</h2>";
			}
		}
	}
?>