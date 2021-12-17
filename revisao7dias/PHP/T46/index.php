<?php
	function enviarEmailErro()
	{
		include_once("EnviarEmail.php");
		$enviarEmail = new EnviarEmail();
		$EMAILDESTINATARIO = "contato.matheusoliv@gmail.com";
		$NOMEDESTINATARIO = "MatheusOliver";
		$enviarEmail->configurarDestinatario($EMAILDESTINATARIO,$NOMEDESTINATARIO);
		$enviarEmail->configurarMensagem("LOG DE ERRO DO PROJETO N13478","logError".".html");
		$enviarEmail->enviarMensagem();
	}
	function criarArquivoHtml($errorInJson)
	{
		$file = fopen("logError.html","a+");
		fwrite($file,"<h4>OCORREU O SEGUINTE ERRO</h4>\n\r<pre>".$errorInJson."</pre>");
		fclose($file);
	}
	function error_handler($code,$message,$file,$line)
	{
		$error = 
		[
			"code :" => $code,
			"message :" => $message,
			"file :" => $file,
			"line: " => $line
		];
		$errorInJson = json_encode($error);
		criarArquivoHtml($errorInJson);
		enviarEmailErro();

	}
	set_error_handler("error_handler");
	100/0;

?>
<!--
esse arquivo foi criado por um robo
-->