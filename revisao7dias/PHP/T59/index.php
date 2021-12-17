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
		if(is_numeric($_POST["inputId"]) && strlen($_POST["inputId"]) <7)
		{
			$id = $_POST["inputId"];
			echo "você não é nenhum expertinho";
		}
		else
		{
			exit("Pegamos você");
		}
		$conexao  = new PDO("mysql:dbname=bancodados;host=localhost","root","");
		$stmt = $conexao->prepare("SELECT * FROM cadastro WHERE id = $id");
		$stmt->execute();
		$resultado = $stmt->fetchall(PDO::FETCH_ASSOC);
		print_r($resultado);
	}
?>
<!--
esse arquivo foi criado por um robo
-->