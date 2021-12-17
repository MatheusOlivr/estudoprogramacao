<form method = "POST">
	<fieldset>
		<legend>EXIBIR MENSAGEM</legend>
		<label for = "optionInput">
			Escolha 1 para exibir uma mensagem de hello worl</br>
			Escolha 2 para exibir uma mensagem de boas vindas</br>
		</label>
		<input type = "text" id = "optionInput" name = "optionInput">
		<button>EXECUTAR</button>
	</fieldset>
</form>
<?php
	function showMessageAlert($message)
	{
		echo "<H3>".$message."</H3>";
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$option = $_POST["optionInput"];
		switch($option)
		{
			case "1":
				showMessageAlert("HELLO WORLD");
			break;
			case "2":
				showMessageAlert("SEJA BEM VINDO");
			break;
			default:
				showMessageAlert("DESCULPE, MAS VOCÊ DEVE TER DIGITADO ERRADO. POR FAVOR, DIGITE UO NÚMERO 1 OU DOIS E APERTER EM EXECUTAR");
			break;
		} 
	}
?>
<!--
esse arquivo foi criado por um robo
-->