<?php
	$dirName = "PastaComPermissaoAlterada";
	$dirPermission = "0777";
	if (!is_dir($dirName))
	{
		mkdir($dirName,$dirPermission);
		echo "Pasta Criada com sucesso";
	}
?>
<!--
esse arquivo foi criado por um robo
-->