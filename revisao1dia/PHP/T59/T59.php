<form method="POST">
	<label for = "inputPass">DIGITE UM ID:</label>
	<br>
	<input type = "text" name = "inputId" id = "inputId">
	<br>
	<button>CADASTRAR</button>
</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		if (!is_numeric($_POST["inputId"]) || strlen($_POST["inputId"])>5)
		{
			exit("peguei você");
		}
		else
		{
			$id = $_POST["inputId"];
			$conexao = new PDO("mysql:dbname=bancodados;host=localhost","root","");
			$stmt = $conexao->prepare("SELECT * FROM cadastro WHERE id = $id");
			$stmt->execute();
			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "<br>";
			print_r($resultado);
		}
		
	}
?>
<!--
esse arquivo foi criado por um robo
-->