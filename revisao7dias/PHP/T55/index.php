
<form method = "POST">
	<label for = "inputNome">Digite seu nome:</label>
	<br>
	<input type = "text" name = "inputNome">
	<br>
	<label for = "inputIdade">Digite sua Idade:</label>
	<br>
	<input type = "text" name = "inputIdade">
	<br>
	<button>enviar</button>
</form>
<?php
	use Rain\Tpl;
	if ($_SERVER['REQUEST_METHOD'] === "POST")
	{
		// include
		require "vendor/rain/raintpl/library/Rain/autoload.php";
		// namespace
		$nome = $_POST['inputNome'];
		$idade = $_POST["inputIdade"];
		$nascimento = date("Y",strtotime("-".$idade."Years"));
		// config
		$config = array(
		    "tpl_dir"       => "templates/",
		    "cache_dir"     => "cache/",
		    "debug"         => true, // set to false to improve the speed
		);
		Tpl::configure( $config );
		// Add PathReplace plugin (necessary to load the CSS with path replace)
		Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
		// create the Tpl object
		$tpl = new Tpl;
		// assign a variable
		$tpl->assign("nome",$nome);
		$tpl->assign("idade",$idade);
		$tpl->assign("nascimento",$nascimento);
		// draw the template
		$tpl->draw( "home" );

	}

?>