<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$nomeDestinatario = $_POST['nomeDestinatario__input'];
		$emailDestinatario = $_POST['nomeDestinatario__input'];
		$descricaoMensagem = $_POST['descricaoMensagem__input'];
		$conteudoHtml = $_POST['conteudoHtml__input'];
		$conteudoSimples = $_POST['conteudoSimples__input'];
		require ('autoload.php');
		$enviarEmail = new EnviarEmail();
		$enviarEmail->configurarRemetente();
		$enviarEmail->configurarDestinatario("contato.matheusoliv@gmail.com","MatheusOliver");
		$enviarEmail->configurarMensagem($descricaoMensagem,$conteudoHtml,$conteudoSimples);
		if ($enviarEmail->enviarMensagem())
		{
			echo "email enviado com sucesso";
		}

	}
?>