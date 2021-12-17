<?php 
	class IndexController
	{
		private $text;
		public function __construct()
		{
			if ($_SERVER["REQUEST_METHOD"] === "POST")
			{
				$this->text = $_POST["inputTexto"];
				$this->showText();
			}
		}
		protected function ShowText()
		{
			echo ($this->text);
			echo "</br>";
			echo strip_tags($this->text);
			echo "</br>";
			echo htmlentities($this->text);
		}
	}
?>