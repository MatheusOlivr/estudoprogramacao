<?php
	class Escrever
	{
		public  function escreverNaTela()
		{
			echo "Eu sou o método escrever na tela da classe escrever";
		}
	}
	class FilhoDaClasseEscrever extends Escrever
	{
		public  function escreverNaTela()
		{
			echo "eu sou o método escrever na tela da classe FilhoDaClasseEscrever";
		}
		function teste()
		{
			parent::escreverNaTela();
		}
	}
	$objeto1 = new Escrever();
	$objeto2 = new FilhoDaClasseEscrever();
	$objeto1->escreverNaTela();
	echo "<br>";
	$objeto2->teste();

?>
<!--
esse arquivo foi criado por um robo
-->