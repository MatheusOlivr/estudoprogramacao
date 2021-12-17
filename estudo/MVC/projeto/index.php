<?php
	require "autoload.php";
	use \App\Controller\Pages\Home;
	echo Home::getHome();
?>
<!--
esse arquivo foi criado por um robo
A gente cria de inicio uma pasta chamada app e criamos a pasta do controller
começamos pelo controller porque ele é a ponte entre o view e o model.
Depois a gente cria uma pasta chamada page e dentro dela criamos um arquivo home.php
Esse arquivo será o controller da pagina home.

Vamos criar uma pasta resource que vai guardar todos os recuros da nossa aplicação (html,css,imagens e etc). Dentro dela criamos uma pasta chamada view e uma chamada page e por ultimo criamos um arquivo Home.php. (aqui vai ser o nosso view).

Dentro de app vamos criar uma pasta chamada util e dentro dessa pasta vamos criar um arquivo view.php
(essa arquivo vai gerenciar a nossa view )
-->