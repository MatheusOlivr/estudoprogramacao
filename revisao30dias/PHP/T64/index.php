<?php 
	$text = "dImt2pa7nDD7STLgdzFXGg==";
	$key1 = pack(a16,$key1);
	$key2 = pack(a16,$key2);
	function encrypt($text,$key1,$key2)
	{
		$textEncrypted = openssl_encrypt($text,"AES-128-CBC",$key1,0,$key2);
		echo $textEncrypted;
	}
	function decrypt($text,$key1,$key2)
	{
		$textDecrypted = openssl_decrypt($text,"AES-128-CBC",$key1,0,$key2);
		echo $textDecrypted;
	}
	encrypt($text,$key1,$key2);
	echo "<br>";
	decrypt($text,$key1,$key2);
?>