<?php
	session_start(); 
	$hashId1324 = openssl_decrypt($_COOKIE['hashId1324'],"AES-128-CBC",pack("a16","hash132487"),0,pack("a16","hash132487")); 
	if ($hashId1324 === session_id())
	{
		echo "Você está logado com sucesso";
		session_regenerate_id();
		echo "<br>";
		include_once("function.php");
		createHash();
		echo "Foi gerado um novo id para a sessão";

	}
?>