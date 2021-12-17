<?php
	$imageScreen = imagecreate(800,800);
	$imageBackgroundColor = imagecolorallocate($imageScreen,255, 64,52);
	$imageTextColor = imagecolorallocate($imageScreen,0,0,0);
	imagestring($imageScreen,5,375,125, "HELLO WORLD",$imageTextColor);
	// imagem criada com sucesso
	if (imagejpeg($imageScreen,"image.jpeg",100))
	{
		imagedestroy($imageScreen);
		echo "<h2>Imagem criada com sucesso no diretório</h2>";
	}

?>
<!--
esse arquivo foi criado por um robo
-->