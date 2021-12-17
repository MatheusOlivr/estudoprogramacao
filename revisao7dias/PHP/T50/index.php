<?php
	$imageScreen = imagecreate(800,800);
	$imageBackgroundColor = imagecolorallocate($imageScreen,255,255,255);
	$imageTextColor = imagecolorallocate($imageScreen,0,0,0);
	$imageFontFIlename = "roboto/Roboto-Black.ttf";
	imagettftext($imageScreen,50,0,174,375,$imageTextColor,$imageFontFIlename,"HELLO WORLD");
	// imagem criada com sucesso
	imagejpeg($imageScreen,"imagem.jpeg",100);
	echo "imagem criada com sucesso";

?>
<!--
esse arquivo foi criado por um robo
-->