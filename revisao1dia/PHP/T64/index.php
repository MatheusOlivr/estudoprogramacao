<style>
	table
	{
		margin-top: 1vw;
		width: 80vw;
		position: absolute;
		left: 50%;
		text-align: center;
		border: solid black 1vw;
		border-collapse: collapse;
		transform: translateX(-50%);
	}
	th,td
	{
		border: solid black 0.3vw;
		padding: 2vw;
		border-collapse: collapse;
	}
</style>
<fieldset>
	<legend>
		Criptografador
	</legend>
	<form method = "POST">
		<label for = "inputTexto">Qual o texto que deseja criptografar ?</label>
		<br>
		<textarea name = "inputText" id = "inputText"></textarea>
		<br>
		<label for = "inputKey1">Digite aqui a primeira chave da criptografia</label>
		<br>
		<input type = "text" name = "inputKey1">
		<br>
		<label for = "inputKey2">Digite aqui a primeira chave da criptografia</label>
		<br>
		<input type = "text" name = "inputKey2">
		<br>
		<button>CRIPTOGRAGAR</button>
	</form>
</fieldset>
<?PHP
	$textForEncrypt = 10;
	function encryptText()
	{
		global $textForEncrypt;
		global $key1;
		global $key2;
		$textEncrypted = openssl_encrypt($textForEncrypt, "AES-128-CBC",$key1,0,$key2);
		return $textEncrypted;
	}
	function DecryptText()
	{
		global $textForEncrypt;
		global $key1;
		global $key2;
		$textDecrypted = openssl_decrypt($textForEncrypt, "AES-128-CBC",$key1,0,$key2);
		return $textDecrypted;
	}
	function convertKeyForFormaA16 ()
	{
		global $key1;
		global $key2;
		$key1 = pack("a16",$key1);
		$key2 = pack("a16",$key2);
	}
	function printMessage($message)
	{
		echo "
		<table>
			<tr>
				<th>TEXTO CRIPTOGRAFADO COM SUCESSO:</th>
			</tr>
			<tr>
				<td>$message</td>
			</tr>
		</table>";
	}
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$textForEncrypt = $_POST['inputText'];
		$key1 = $_POST["inputKey1"];
		$key2 = $_POST["inputKey2"];
		convertKeyForFormaA16();
		echo "<b>".printMessage(decryptText())."</b>";
	} 
?>