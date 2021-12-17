<?php
	session_start();
	echo session_id();
	echo "<br>";
	if (session_id() === "jd66lt2rjmtg926r0m19kfuet2")
	{
		echo "Você está logado com sucesso";
		session_regenerate_id();
		session_destroy();
	}
	else 
	{
		echo "Saia daqui";
	}
?>
<!--
esse arquivo foi criado por um robo
-->