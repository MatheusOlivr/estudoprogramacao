<form method = "POST">
	<label for = "inputTexto" >Digite o texto aqui:</label>
	<br>
	<input type = "text" name = "inputTexto" id = "inputTexto">
	<br>
	<button>CONVERTER</button>
</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$textoParaConverter = $_POST['inputTexto'];
		$textoConvertido = strtoupper($textoParaConverter);
		echo $textoConvertido;
		echo strip_tags($textoConvertido,"<strong>");
		echo htmlentities($textoConvertido);
	}
?>
<!--
esse arquivo foi criado por um robo
-->