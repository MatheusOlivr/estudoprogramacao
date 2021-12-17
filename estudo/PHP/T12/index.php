<?php
	function writeMessage($messsage)
	{
		echo "<pre>";
		print_r($messsage);
		echo "</pre>";
	}
	$pessoa = 
	[
		"pessoa1" => "Carlos Alberto",
		"pessoa2" => "Luiz Carlos",
		"pessoa3" => "Fernanda Lima"
	];
	writeMessage($pessoa);
	$pessoa = array
	(
		"pessoa1" => "Carlos Alberto",
		"pessoa2" => "Luiz Carlos",
		"pessoa3" => "Fernanda Lima"
	);
	$pessoa["pessoa4"] = "Matheus Oliveira Ferreira";
	writeMessage($pessoa);
	echo "Esse array tem os seguintes Indices";
	writeMessage(array_keys($pessoa));
	echo "Esse array tem os seguintes valores";
	writeMessage(array_values($pessoa));
?>
<!--
esse arquivo foi criado por um robo
-->