<form method = "POST" enctype="multipart/form-data">
	<input type = "file" name = "inputUploadFile">
	<br>
	<button>Fazer upload</button>
</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] === "POST")
	{
		$dir = "upload";
		$file = $_FILES["inputUploadFile"];
		$filenameDestiny = $dir.DIRECTORY_SEPARATOR.$file["name"];
		$dirPermission = "0744";
		if(!is_dir($dir))
		{
			mkdir ("upload",$dirPermission);
		}
		if ($file["error"])
		{
			echo "não foi possivél carregar o arquivo";
		}
		else
		{
			if (move_uploaded_file($file["tmp_name"],$filenameDestiny))
			{
				echo "upload feito com sucesso";
			}
			else
			{
				echo "falha ao fazer upload";
			}
		}
	}
?>
<!--
esse arquivo foi criado por um robo
-->