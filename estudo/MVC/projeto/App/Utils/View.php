<?php 
	namespace App\Utils;
	class View
	{
		// metodo responsavel por retornar o conteudo de uma view
		private static function getContentView($view)
		{
			$file = "./Resources/View/".$view.".html";
			if (file_exists($file))
			{
				return file_get_contents($file);
			}
			else
			{
				return "deu errado";
			}
		}
		// metodo responsavél por retornar o conteúdo renderizado de uma view
		public static function render($view)
		{
			//conteudo da view
			$contentView = self::getContentView($view);
			return $contentView;
		}
	}
?>