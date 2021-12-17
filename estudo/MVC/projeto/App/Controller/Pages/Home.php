<?php 
	namespace App\Controller\Pages;
	use \App\Utils\View;
	class Home
	{
		// Método responsável por retornar o conteúdo da nossa Home;
		public static function getHome()
		{
			return View::render("Pages/home");
		}
	}
?>