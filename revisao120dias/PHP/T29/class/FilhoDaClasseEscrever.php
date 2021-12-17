<?php 
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
?>