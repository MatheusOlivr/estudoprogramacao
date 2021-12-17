<?php
	function message($var)
	{
		echo "--------</br>";
		echo "Valor da variável: ";
		print_r($var);
		echo "</br>--------</br>";
	}
	$var = "I'm a string";
	$Var = 50;
	message($var);
	message($Var);

?>
<!--
esse arquivo foi criado por um robo
-->