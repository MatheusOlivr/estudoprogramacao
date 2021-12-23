<?php 
	$imageTela = imagecreate(200,200);
	$imageBackgroundColor = imagecolorallocate($imageTela,255,255,255);
	$imageTextColor = imagecolorallocate($image,255,255,255);
	imagestring($imageTela,5, 00,100,"HELLOOOOU WORLD", $imageTextColor);
	imagejpeg($imageTela);
?>