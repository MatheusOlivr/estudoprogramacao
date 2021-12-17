<?php
	const SGBD = "mysql";
	const HOST = "localhost";
	const DBNAME = "db_employee";
	const USER = "root";
	const PASS = "";
	if ($con = new PDO(SGBD.":host=".HOST.";dbname=".DBNAME,USER,PASS))
	{
		echo "Conexão Iniciada com sucesso";
	};
?>
<!--
esse arquivo foi criado por um robo
-->