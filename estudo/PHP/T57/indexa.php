<?php 
	use Slim\Factory\AppFactory;
	require("vendor/autoload.php");
	$app = new \Slim\Slim();
	$app->get('/', function ($name) {
	    echo "Hello, " . $name;
	});
	$app->run();
?>