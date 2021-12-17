<?php
	function convertArrayInJson($array)
	{
		$result = json_encode($array);
		return $result;
	}
	function convertJsonInArray($json)
	{
		$result = json_decode($json,1);
		return $result;		
	}
	$array = [
		"Nome" => "Matheus",
		"Idade" => "18 Anos",
		"Sexo" => "Masculino"
	];
	$json = '{"Nome":"Matheus","Idade":"18 Anos","Sexo":"Masculino"}';
	echo convertArrayInJson($array);
	echo "<br>";
	print_r(convertJsonInArray($json));
?>
<!--
esse arquivo foi criado por um robo
-->