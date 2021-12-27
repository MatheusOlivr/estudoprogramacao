<?php
	header("Content-type:image/jpeg"); 
	$filenameImageBackground = "fundo.jpg";
	$imageScreen = imagecreatefromjpeg($filenameImageBackground);
	$imageColorText = imagecolorallocate($imageScreen,0,0,0);
	imagestring($imageScreen,4,90,130,"IMAGEM CRIADA USANDO UMA IMAGEM EXISTENTE COMO FUNDO",$imageColorText);
	imagejpeg($imageScreen);
	imagedestroy($imageScreen);
?>