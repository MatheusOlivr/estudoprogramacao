<fieldset>
	<legend>CRIPTOGRAFIA EM PHP</legend>
	<form method = "POST">
	<label for = "inputTexto">Digite aqui o texto que deseja criptografar ou descriptografar</label>
	<br>
	<textarea id = "inputTexto" name = "inputTexto"></textarea>
	<br>
	<label for = "inputChave1">Chave para quebrar a criptografia</label>
	<br>
	<input type = "text" name = "inputChave1" id = "inputChave1">
	<br>
	<label for = "inputChave2">Chave 2 para quebrar a criptografia</label>
	<br>
	<input type = "text" name = "inputChave2" id = "inputChave2">
	<br>
	<select name = "selectEscolha">
		<option value = "criptografar">CRIPTOGRAFAR</option>
		<option value = "descriptografar">DESCRIPTOGRAFAR</option>
	</select>
	<br>
	<button value = "decriptografar">CONVERTER</button>
	</form>
</fieldset>
<?php
	function criptografar ()
	{
		global $texto;
		global $chave1DaCriptografia;
		global $chave2DaCriptografia;

		$textocriptografado = openssl_encrypt(
			$texto, 
			"AES-128-CBC",
			$chave1DaCriptografia,
			0,
			$chave2DaCriptografia
			 );
		return $textocriptografado;
	}
	function converterChaveEm16Caracteres(&$chave1DaCriptografia,&$chave2DaCriptografia)
	{
		$chave1DaCriptografia = pack("a16",$chave1DaCriptografia);
		$chave2DaCriptografia = pack("a16",$chave2DaCriptografia);
	}
	function descriptografar()
	{
		global $texto;
		global $chave1DaCriptografia;
		global $chave2DaCriptografia;
		$textoDescriptografado = openssl_decrypt(
			$texto,
			"AES-128-CBC",
			$chave1DaCriptografia,
			0,
			$chave2DaCriptografia);
		return $textoDescriptografado;
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$texto = $_POST["inputTexto"]; 
		$chave1DaCriptografia = $_POST["inputChave1"];
		$chave2DaCriptografia = $_POST['inputChave2'];
		$escolha = $_POST["selectEscolha"];
		converterChaveEm16Caracteres($chave1DaCriptografia,$chave2DaCriptografia);
		switch($escolha)
		{
			case "criptografar":
				echo criptografar();
			break;
			case "descriptografar":
				echo descriptografar();
			break;
			default:
			break;
		}
	}
?>
<!--
esse arquivo foi criado por um robo
-->