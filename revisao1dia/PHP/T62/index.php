<form method = "POST">
	<input type ="text" name = "inputTexto">
	<br>
	<button>ENVIAR</button>
</form>
<?php
	function ConverterTexto()
	{
		$textoParaConverter = $_POST["inputTexto"];
		$textoConvertido = strtoupper($textoParaConverter);
		return strip_tags($textoConvertido);
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		echo ConverterTexto();
	}
?>
<!--
esse arquivo foi criado por um robo
-->