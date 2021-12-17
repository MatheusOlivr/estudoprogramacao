<?php
	spl_autoload_register(
		function($class){
			$dir = "class";
			$filenameClass = $dir.DIRECTORY_SEPARATOR.$class.".php";
			if (file_exists($filenameClass))
			{
				include_once($filenameClass);
			}
		}
	);
?>
<!--
esse arquivo foi criado por um robo
-->