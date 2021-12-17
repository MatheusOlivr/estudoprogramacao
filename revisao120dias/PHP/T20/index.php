<?php 
	function write($text)
	{
		echo "<h2>".$text."</h2>";
	}
	setlocale(LC_ALL,"pt_BR.utf8");
	$date = strftime("%A %d de %B de %Y");
	write($date);
?>