<?php
	$imageScreen = imagecreatefromjpeg("imagem.jpeg");
	$imageTextColor = imagecolorallocate($imageScreen,0,0,0);
	imagestring($imageScreen,5,375,375,"HELLO WORLD",$imageTextColor);
	if (imagejpeg($imageScreen,"imagemGD.jpeg",100))
	{
		imagedestroy($imageScreen);
		echo "<h2>Imagem criada com sucesso no diretório</h2>";
	}

?>