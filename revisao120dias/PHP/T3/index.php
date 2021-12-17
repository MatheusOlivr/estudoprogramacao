<?php
	function write($function)
	{
		echo $function."</br>";
	}
	$text = "hello world";
	write(strtolower($text));
	write(strtoupper($text));
	write(ucfirst($text));
	write(ucwords($text));
	write(strlen($text));
	write(str_replace("o","0",$text));
	write(strpos($text,"world"));
	write(substr($text,"0","5"));
?>
<!--
esse arquivo foi criado por um robo
-->