<?php
	header("Content-type:image/jpeg");
	$imageOriginal = "imagem.jpeg";
	$imageThumbWidth = 400;
	$imageThumbHeight = 400;
	list($imageOriginalWidth,$iimageOriginalHeight) = getimagesize($imageOriginal);
	$imageScreenThumb = imagecreatetruecolor($imageThumbWidth,$imageThumbHeight);
	$imageScreenOriginal = imagecreatefromjpeg($imageOriginal);
	imagecopyresampled($imageScreenThumb,$imageScreenOriginal,0,0,0,0,$imageThumbWidth,$imageThumbHeight,$imageOriginalWidth,$iimageOriginalHeight);
	imagejpeg($imageScreenThumb);

?>
<!--
esse arquivo foi criado por um robo
-->