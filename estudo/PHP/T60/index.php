<?php 
	$dir = "public";
	$permissaoDir = "0755";
	if (!is_dir($dir))
	{
		mkdir($dir,$permissaoDir);
		echo "Pasta criada";
		$file = fopen($dir.DIRECTORY_SEPARATOR."texto.txt","w+");
		fwrite($file,"hello world");
		fclose($file);
	}
	else
	{
		rmdir($dir);
		echo "Pasta Apagada";
	}
?>