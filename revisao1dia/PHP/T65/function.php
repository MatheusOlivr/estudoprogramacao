<?php 
	function createHash()
	{
		setcookie("hashId1324",openssl_encrypt(session_id(),"AES-128-CBC",pack("a16","hash132487"),0,pack("a16","hash132487")));
	}
?>