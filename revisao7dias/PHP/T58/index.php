<form>
	<label for = "inputAcessarDir">DIGITE O NOME DA PASTA QUE DESEJA ACESSAR</label>
	<br>
	<input type = "text" name = "inputAcessarDir" id = "inputAcessarDir">
	<br>
	<button>ENVIAR</button>
</form>
<?php 
	if (isset($_GET["inputAcessarDir"]))
	{
		$acessarDir = escapeshellcmd($_GET["inputAcessarDir"]);
		echo $acessarDir;
		system($acessarDir);
	}
?>