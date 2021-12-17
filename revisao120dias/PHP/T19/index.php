<?php 
	function write($text)
	{
		echo "<h2>".$text."</h2>";
	}
	write(date("D/M/Y h:m:i",strtotime("+1 day")));
?>