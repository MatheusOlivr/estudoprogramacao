<?php
	function createArray(&$var)
	{
		$cont = 0;
		while($cont<=10)
		{
			$var[] = $cont;
			$cont++;
		}
		return $var;
	}
	$var = [];
	function writeInScreenArray($array)
	{
		foreach($array as $key => $value)
		{
			echo "Esse é o indice $key do array e o seu valor é: $value<br>";
			echo "Agora esse indice terá seu valor + 100 <br>";
			$newarray[] = $value+100;
		}
		return $newarray;
	}
	createArray($var);
	print_r(writeInScreenArray($var));
	
?>
<!--
esse arquivo foi criado por um robo
-->